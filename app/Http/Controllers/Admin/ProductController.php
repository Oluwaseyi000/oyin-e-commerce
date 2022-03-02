<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductFormRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function listProducts(){
        $products = Product::latest()->paginate(10);
        return view('admin.products.list-products', compact('products'));
    }

    public function createProduct(CreateProductFormRequest $request){
        $data = $request->validated();
        $data['image'] = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/products'), $data['image']);

       Product::create($data);

       $this->flashSuccessMessage('Product created successfully');
       return back();
    }


}
