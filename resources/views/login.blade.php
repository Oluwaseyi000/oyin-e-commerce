@extends('layouts.front', ['pageTitle' => 'Login'])
@section('more-styles')
    <link rel="stylesheet" href="../css/style_login.css">
@endsection
@section('content')
    <main class="form-signin mt-4">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h2 class="logo mb-4" width="72" height="57">Welcome!</h2>
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="{{old('email')}}" name="email">
        <label for="floatingInput">Email address</label>
        </div>

        <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
        <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2022–2032</p>
    </form>
    </main>
    <div class="border-top mt-5"></div>
@endsection

