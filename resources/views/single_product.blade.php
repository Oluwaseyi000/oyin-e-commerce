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
    <title>e-commerce app | {{$product->name}}</title>
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
                <a class="nav-link active dark-blue navbar-brand" aria-current="page" href="./shop.html">SHOP</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active dark-blue" href="./login.html">LOGIN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active dark-blue" href="./signup.html">SIGNUP</a>
              </li>
            </ul>
            <form>
              <input class="form-control" type="text" placeholder="Search" aria-label="Search">
            </form>
          </div>
        </div>
    </nav>
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Product Deatils </h2>
                        <span>Beautiful &amp; Affordable products for you</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="d-flex flex-column p-2 justify-content-center align-items-center">
        <div class="card" style="width: 18rem;">
            <img src="../img/pink bag.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        <div class="card" style="width: 18rem;">
            <img src="../img/purple_bag.jpg" class="card-img-top" alt="purple_bag">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div> -->
    <div class="d-flex flex-column p-2 justify-content-center align-items-center">
        <div class="card mb-3" style="max-width: 740px;">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="{{asset('images/products/'.$product->image)}}" class="card-img" alt="...">
                </div>
                <div class="col-md-6 pt-5 mt-5">
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
                                </div>
                            </div>
                        </div>
                        <div class="total">
                            <h4>Total: &#8358;20,000.00</h4>
                        </div>
                        <a href="#" class="btn btn-primary" id="cart">Add to Cart</a>
                    </div>
                </div>
                <div class="row">
                    <p class="font-bold">Product Description</p>
                    <p class="">{{$product->description}}</p>
                </div>
            </div>
        </div>
    </div>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4  px-5 bg-primary mb-auto">
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

      <script src="../app.js"></script>
</body>
