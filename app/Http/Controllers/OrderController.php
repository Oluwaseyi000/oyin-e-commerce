<?php

namespace App\Http\Controllers;

use App\Models\OrderProduct;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function listOrders(){
        $orderProducts = OrderProduct::latest()->get();

        return view('admin.orders.list-orders', compact('orderProducts'));
    }

    public function updateStatus(OrderProduct $op, $status_id){
        $op->status_id = $status_id;
        $op->save();
        $this->flashSuccessMessage('Order status updated');
        return back();

        return view('admin.orders.list-orders', compact('orderProducts'));
    }
}
