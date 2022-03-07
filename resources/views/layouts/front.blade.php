<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbars/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style_single_product.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery.js"></script>
    <title>e-commerce app | {{$pageTitle ?? ''}}</title>
    @yield('more-styles')
</head>
<body class="text-center">

    <nav class="navbar navbar-expand navbar-dark bg-primary" aria-label="Fourth navbar example">
        <div class="container-fluid px-5">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active dark-blue" aria-current="page" href="{{route('home')}}">HOME</a>
                  </li>
              <li class="nav-item">
                <a class="nav-link  dark-blue navbar-brand" aria-current="page" href="{{route('shop')}}">SHOP</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  dark-blue navbar-brand" aria-current="page" href="{{route('cart')}}">CART</a>
              </li>
              @guest()
                <li class="nav-item">
                    <a class="nav-link  dark-blue" href="{{route('login')}}">LOGIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  dark-blue" href="{{route('register')}}">SIGNUP</a>
                </li>
              @endguest

              @auth
                <a class="nav-link  dark-blue" href="{{route('merchant.products')}}">MERCHANT</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn nav-link  dark-blue">LOGOUT</button>
                </form>
              @endauth

            </ul>
            <form>
              <input class="form-control" type="text" placeholder="Search" aria-label="Search">
            </form>
          </div>
        </div>
    </nav>
    <main>
        @include('messages.flash-messages')
       @yield('content')
    </main>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4  px-5 bg-primary mb-auto">
        <p class="col-md-4 mb-0 text-white">&copy; 2022 Lorem, Inc</p>
        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <h2 class="logo">Lorem!</h2>
        </a>
        <ul class="nav col-md-4 justify-content-end color-black">
          <li class="nav-item"><a href="{{route('home')}}" class="nav-link px-2 text-white">Home</a></li>
          <li class="nav-item"><a href="{{route('shop')}}" class="nav-link px-2 text-white">Shop</a></li>
          @guest()
            <li class="nav-item"><a href="{{route('login')}}" class="nav-link px-2 text-white">Login</a></li>
            <li class="nav-item"><a href="{{route('register')}}" class="nav-link px-2 text-white">Sign Up</a></li>
          @endguest
          <li class="nav-item"><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>
      </footer>

      <script src="../app.js"></script>

      @yield('more-scripts')
</body>
