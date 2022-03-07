@extends('layouts.front')

@section('content')
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Product Deatils </h2>
                        <span>Beautiful &amp; Affordable products for you</span>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('cart')}}" class="btn btn-primary btn-bg"> Proceed to Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-column p-2 justify-content-center align-items-center">
        <div class="card mb-3" style="max-width: 740px;">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="{{asset('images/products/'.$product->image)}}" class="card-img" height="500" alt="...">
                </div>
                <div class="col-md-6 pt-5 mt-5">
                    <form action="{{route('product.add-to-cart')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <h4>&#8358;{{$product->price}}</h4>
                            <p class="card-text">{{$product->description}}</p>
                            <p class="card-text"><small class="text-muted">Last updated {{$product->created_at->diffForHumans()}}</small></p>
                            <div class="quantity-content">
                                <div class="left-content">
                                    <h6>No. of Orders:</h6>
                                </div>
                                <div class="right-content">
                                    <div class="quantity buttons_added">
                                        <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="form-control input-text qty text" size="4" pattern="" inputmode="">
                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                    </div>
                                </div>
                            </div>



                            {{-- <div class="total">
                                <h4>Total: &#8358;20,000.00</h4>
                            </div> --}}
                            <div class="my-2">
                                <button type="submit" class="btn btn-primary" id="cart">Add to Cart</button>
                            </div>
                            {{-- <a href="#" class="btn btn-primary" id="cart">Add to Cart</a> --}}
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
