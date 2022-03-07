@extends('layouts.front')
@section('more-styles')
    <link rel="stylesheet" href="{{asset('/css/style_signup.css')}}">
@endsection
@section('content')
    <main class="form-signin">
      <form action="{{ route('register') }}" method="POST">
        @csrf
        <h2 class="logo mb-4" width="72" height="57">Welcome!</h2>
        <h1 class="h3 mb-3 fw-normal">Fill in your details to get started:</h1>

        <div class="form-floating mb-2">
          <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com" name="email" value="{{old('email')}}">
          <label for="floatingEmail">Email address</label>
        </div>
        <div class="form-floating mb-2">
            <input type="text" class="form-control" id="floatingUsername" placeholder="Preferred Username" name="name" value="{{old('name')}}">
            <label for="floatingUsername">Username</label>
        </div>
        <div class="form-floating mb-2">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
          <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating mb-2">
          <input type="password" class="form-control" id="floatingPasswordConfirm" placeholder="Password" name="password_confirmation">
          <label for="floatingPasswordConfirm">Confirm Password</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="user_type" id="inlineRadio1" value="{{App\Models\User::USER_TYPE_MERCHANT}}">
            <label class="form-check-label" for="inlineRadio1">Merchant</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="user_type" id="inlineRadio2" value="{{App\Models\User::USER_TYPE_CUSTOMER}}">
            <label class="form-check-label" for="inlineRadio2">Customer</label>
          </div>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
        {{-- <p class="mt-5 mb-3 text-muted">&copy; 2022–2032</p> --}}
      </form>
    </main>
@endsection
