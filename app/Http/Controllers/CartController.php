<?php

namespace App\Http\Controllers;

use Paystack;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $id = $request->product_id;
        $quantity = $request->quantity;
        $product = Product::find($id);

        if(!$product) {
            abort(404);
        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                $id => [
                    "product_id" => $id,
                    "name" => $product->name,
                    "quantity" => $quantity,
                    "price" => $product->price,
                    "total_price" => $product->price * $quantity,
                    "image" => $product->image
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->route('cart')->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + $quantity;
            session()->put('cart', $cart);
            return redirect()->route('cart')->with('success', 'Product added to cart successfully!');
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "product_id" => $id,
            "name" => $product->name,
            "quantity" =>  $quantity,
            "price" => $product->price,
            "total_price" => $product->price * $quantity,
            "image" => $product->image
        ];

        session()->put('cart', $cart);
        return redirect()->route('cart')->with('success', 'Product added to cart successfully!');
    }

    public function cart(){
        return view('cart');
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }


    public function redirectToGateway(Request $request)
    {
        $orderProduct = session()->get('cart');
        $customer =  $this->getAuthUser();
        $request->email = $customer->email;
        $request->orderID = uniqid();
        $request->amount = array_sum(array_column($orderProduct,'total_price')) * 100; // convert to kobo
        $request->quantity = 1;
        $request->currency = 'NGN';
        $request->metadata = json_encode(['orderedProducts' => $orderProduct, 'customer' => $customer, 'other' => $request->all()]);
        $request->reference = Paystack::genTranxRef();
        try{
            return paystack()->getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }
    }


    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
        $data = $paymentDetails['data'];
        $price = $data['amount']/100; //convert back to naira
        $customer = $data['metadata']['customer'];
        $orderProduct = $data['metadata']['orderedProducts'];
        $orderProductEntries = [];

        $order = Order::create([
            'customer_id' => $customer['id'],
            'quantity' => array_sum(array_column($orderProduct,'quantity')),
            'price' =>  array_sum(array_column($orderProduct,'price')),
            'status_id' => 1,
            'delivery_address' => 'Nigeria',
            'phone_number' => '08146096565',
        ]);

        foreach ($orderProduct as $product) {
            $entries['order_id'] = $order->id;
            $entries['product_id'] = $product['product_id'];
            $entries['price'] = $product['price'];
            $entries['status_id'] = OrderProduct::STATUS_PENDING;
            $entries['meta'] = json_encode($product);
            $entries['created_at'] = now();
            $entries['updated_at'] = now();
            $orderProductEntries[] = $entries;
        }

        OrderProduct::insert($orderProductEntries);
        session()->remove('cart');
        $this->flashSuccessMessage('Order Successful');

        return redirect()->route('shop');
    }
}
