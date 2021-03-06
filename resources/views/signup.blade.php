<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbars/">
    {{-- <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset('/css/style_signup.css')}}">
    {{-- <link rel="stylesheet" href={{asset('css/style_signup.css')}}> --}}
    <title>e-commerce app | Sign Up</title>
</head>
<body class="text-center">
    <nav class="navbar navbar-expand navbar-dark bg-primary" aria-label="Fourth navbar example">
        <div class="container-fluid px-5">
          <!-- <a class="navbar-brand dark-blue" href="#">HOME</a> -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active dark-blue" aria-current="page" href="./index.html">HOME</a>
                  </li>
              <li class="nav-item">
                <a class="nav-link active dark-blue" aria-current="page" href="./shop.html">SHOP</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active dark-blue" href="./login.html">LOGIN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active dark-blue navbar-brand" href="./signup.html">SIGNUP</a>
              </li>
            </ul>
            <form>
              <input class="form-control" type="text" placeholder="Search" aria-label="Search">
            </form>
          </div>
        </div>
      </nav>
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
          <input type="password" class="form-control" id="floatingPasswordConfirm" placeholder="Password" name="password_confirm">
          <label for="floatingPasswordConfirm">Confirm Password</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="user_type" id="inlineRadio1" value="merchant">
            <label class="form-check-label" for="inlineRadio1">Merchant</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="user_type" id="inlineRadio2" value="customer">
            <label class="form-check-label" for="inlineRadio2">Customer</label>
          </div>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
        {{-- <p class="mt-5 mb-3 text-muted">&copy; 2022???2032</p> --}}
      </form>
    </main>
    <div class="border-top mt-3"></div>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4  px-5 bg-primary">
      <p class="col-md-4 mb-0 text-white">&copy; 2022 Lorem, Inc</p>
      <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <h2 class="logo">Lorem!</h2>
      </a>
      <ul class="nav col-md-4 justify-content-end color-black">
        <li class="nav-item"><a href="./index.html" class="nav-link px-2 text-white">Home</a></li>
        <li class="nav-item"><a href="./shop.html" class="nav-link px-2 text-white">Shop</a></li>
        <li class="nav-item"><a href="./login.html" class="nav-link px-2 text-white">Login</a></li>
        <li class="nav-item"><a href="./signup.html" class="nav-link px-2 text-white">Sign Up</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-white">About</a></li>
      </ul>
    </footer>
  </body>
