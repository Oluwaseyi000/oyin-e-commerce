@extends('layouts.front')
@section('content')

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">WELCOME TO SHOP!</h1>
        <p class="fs-5 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis distinctio sapiente esse nisi eveniet. Animi commodi enim veritatis, labore nulla dicta ullam tempore nostrum, perferendis rem provident quam voluptate! Facilis.</p>
    </div>
    <div class="container">
        <main>
            <div class="row row-cols-1 row-cols-md-4 mb-3 text-center">
                @forelse ($activeProducts as $product)
                    <div class="col mb-2">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('images/products/'.$product->image)}}" class="card-img-top" alt="{{$product->name}}" height="350">
                            <div class="card-body">
                                <h5 class="card-title">{{$product->name}} <br> &#8358;{{$product->price}}</h5>
                                <p class="card-text">{{$product->description}}</p>
                                <a href="{{route('product-details', $product)}}" class="btn btn-primary">View Product</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div>
                        No Product Listed
                    </div>
                @endforelse
            {{-- <div class="col mb-2">
                <div class="card" style="width: 18rem;">
                    <img src="../img/pink bag.jpg" class="card-img-top" alt="pink_bag">
                    <div class="card-body">
                      <h5 class="card-title">Pink School Bag &#8358;20,000</h5>
                      <p class="card-text">Some product description to make you buy the bag.</p>
                      <a href="../html/single_product.html" class="btn btn-primary" target="_blank">View Product</a>
                    </div>
                  </div>
            </div> --}}
        </main>
    </div>
    <div class="border-top mt-3"></div>
   @endsection
