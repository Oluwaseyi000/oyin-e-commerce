@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                <h4 class="text-bold orange-color" style="font-size: 1.2rem">Orders Lists</h4>
            </div>
            <div class="card">
                <div class="card-header"> <span class="pull-right"><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createNewProductModal">+ Add New Product</button></span></div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Order ID</th>
                            <th scope="col">Product Image</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Customer Email</th>
                            <th scope="col">Delivery Address</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($orderProducts as $op)

                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$op->order->id }}</td>
                                    <td><img src="{{asset('images/products/'.$op->orderDetails->image)}}" alt="" height="60"></td>
                                    <td>{{$op->orderDetails->name}}</td>
                                    <td>{{$op->orderDetails->price}}</td>
                                    <td>{{$op->orderDetails->quantity}}</td>
                                    <td>{{$op->orderDetails->price * $op->orderDetails->quantity}}</td>
                                    <td>{{$op->order->customer->name}}</td>
                                    <td>{{$op->order->customer->email}}</td>
                                    <td>{{$op->order->delivery_address}}</td>
                                    <td> {{$op->status }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <i class="fa fa-ellipsis-h" aria-hidden="true"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                              <a class="dropdown-item" href="#">View</a>
                                              @if($op->status_id != App\Models\OrderProduct::STATUS_IN_PROGRESS)
                                                <a class="dropdown-item" href="{{route('merchant.update-order-status', [$op->id, App\Models\OrderProduct::STATUS_IN_PROGRESS])}}">Mark as In Progress</a>
                                              @endif
                                              @if($op->status_id != App\Models\OrderProduct::STATUS_FULFILLED)
                                                    <a class="dropdown-item" href="{{route('merchant.update-order-status', [$op->id, App\Models\OrderProduct::STATUS_FULFILLED])}}">Mark as Fulfilled</a>
                                              @endif
                                            </div>
                                          </div>
                                    </td>
                                </tr>
                            @empty
                                <td>No Order</td>
                            @endforelse

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>

    <!-- create product Modal -->
    <div class="modal fade" id="createNewProductModal" tabindex="-1" aria-labelledby="createNewProductLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="createNewProductLabel">Add New Product</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('create-product')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                      <label for="productName" class="form-label">Product Name</label>
                      <input type="text" class="form-control" id="productName" name="name" value="{{old('name')}}" required>
                    </div>
                    <div class="mb-3">
                      <label for="productPrice" class="form-label">Product Price</label>
                      <input type="number" class="form-control" id="productPrice" name="price" value="{{old('price')}}">
                    </div>
                    <div class="mb-3">
                      <label for="quantity" class="form-label">Quantity</label>
                      <input type="number" class="form-control" id="quantity" name="quantity" value="{{old('quantity')}}">
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Description</label>
                      <textarea name="description" id="" cols="30" rows="6" class="form-control">{{old('description')}}</textarea>
                      <div id="descriptionHelp" class="form-text">Let it be as descriptive as possible</div>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status_id" id="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Disable</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="image">Cover Image</label>
                      <input type="file" class="form-control form-file" id="image" name="image">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create Product</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection
