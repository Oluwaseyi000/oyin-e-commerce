@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Product Lists <span class="pull-right"><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createNewProductModal">+ Add New Product</button></span></div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Description</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Image</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->quantity}}</td>
                                    <td><img src="{{asset('images/products/'.$product->image)}}" alt="" height="60"></td>
                                    <td>
                                        @if($product->status_id)
                                            <i class="btn btn-sm btn-success">Active</i>
                                            @else
                                            <i class="btn btn-sm btn-danger">Disable</i>
                                        @endif
                                    </td>
                                    <td></td>
                                </tr>
                            @empty
                                <td>No Products</td>
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
