@extends('layouts.front')
@section('content')
          <div class="container col-xxl-8 px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="../img/hero-img.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Lorem gives the best rates!</h1>
                    <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, consectetur tempora. Expedita aperiam ullam ratione dolor blanditiis nihil, recusandae quam impedit labore debitis inventore repudiandae! Quibusdam nemo nihil tempore omnis?</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        @guest()
                           <a href="{{route('login')}}" class="btn btn-primary btn-lg px-4 me-md-2">Login</a>
                            <a href="{{route('register')}}" class="btn btn-outline-secondary btn-lg px-4">Sign-up</a>
                        @endguest
                        @auth
                            <a href="{{route('shop')}}" class="btn btn-primary btn-lg px-4">Proceed to Shop</a>
                        @endauth
                    </div>
                </div>
                </div>
          </div>
@endsection
