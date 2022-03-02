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
    <link rel="stylesheet" href="../css/style_shop.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>e-commerce app | Shop</title>
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
                                <a href="{{route('product-details', $product)}}" class="btn btn-primary"target="_blank">View Product</a>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse

            {{-- <div class="col mb-2">
                <div class="card" style="width: 18rem;">
                    <img src="../img/pink bag.jpg" class="card-img-top" alt="pink_bag">
                    <div class="card-body">
                      <h5 class="card-title">Pink School Bag &#8358;20,000</h5>
                      <p class="card-text">Some product description to make you buy the bag.</p>
                      <a href="../html/single_product.html" class="btn btn-primary"target="_blank">View Product</a>
                    </div>
                  </div>
            </div>
            <div class="col mb-2">
                <div class="card" style="width: 18rem;">
                    <img src="../img/pink bag.jpg" class="card-img-top" alt="pink_bag">
                    <div class="card-body">
                      <h5 class="card-title">Pink School Bag &#8358;20,000</h5>
                      <p class="card-text">Some product description to make you buy the bag.</p>
                      <a href="../html/single_product.html" class="btn btn-primary"target="_blank">View Product</a>
                    </div>
                  </div>
            </div>
            <div class="col mb-2">
                <div class="card" style="width: 18rem;">
                    <img src="../img/pink bag.jpg" class="card-img-top" alt="pink_bag">
                    <div class="card-body">
                      <h5 class="card-title">Pink School Bag &#8358;20,000</h5>
                      <p class="card-text">Some product description to make you buy the bag.</p>
                      <a href="../html/single_product.html" class="btn btn-primary"target="_blank">View Product</a>
                    </div>
                  </div>
            </div>
            <div class="col mb-2">
                <div class="card" style="width: 18rem;">
                    <img src="../img/pink bag.jpg" class="card-img-top" alt="pink_bag">
                    <div class="card-body">
                      <h5 class="card-title">Pink School Bag &#8358;20,000</h5>
                      <p class="card-text">Some product description to make you buy the bag.</p>
                      <a href="../html/single_product.html" class="btn btn-primary"target="_blank">View Product</a>
                    </div>
                  </div>
            </div>
            <div class="col mb-2">
                <div class="card" style="width: 18rem;">
                    <img src="../img/pink bag.jpg" class="card-img-top" alt="pink_bag">
                    <div class="card-body">
                      <h5 class="card-title">Pink School Bag &#8358;20,000</h5>
                      <p class="card-text">Some product description to make you buy the bag.</p>
                      <a href="../html/single_product.html" class="btn btn-primary"target="_blank">View Product</a>
                    </div>
                  </div>
            </div>
            <div class="col mb-2">
                <div class="card" style="width: 18rem;">
                    <img src="../img/pink bag.jpg" class="card-img-top" alt="pink_bag">
                    <div class="card-body">
                      <h5 class="card-title">Pink School Bag &#8358;20,000</h5>
                      <p class="card-text">Some product description to make you buy the bag.</p>
                      <a href="../html/single_product.html" class="btn btn-primary"target="_blank">View Product</a>
                    </div>
                  </div>
            </div>
            <div class="col mb-2">
                <div class="card" style="width: 18rem;">
                    <img src="../img/pink bag.jpg" class="card-img-top" alt="pink_bag">
                    <div class="card-body">
                      <h5 class="card-title">Pink School Bag &#8358;20,000</h5>
                      <p class="card-text">Some product description to make you buy the bag.</p>
                      <a href="../html/single_product.html" class="btn btn-primary"target="_blank">View Product</a>
                    </div>
                  </div>
            </div>
            <div class="col mb-2">
                <div class="card" style="width: 18rem;">
                    <img src="../img/pink bag.jpg" class="card-img-top" alt="pink_bag">
                    <div class="card-body">
                      <h5 class="card-title">Pink School Bag &#8358;20,000</h5>
                      <p class="card-text">Some product description to make you buy the bag.</p>
                      <a href="../html/single_product.html" class="btn btn-primary"target="_blank">View Product</a>
                    </div>
                  </div>
            </div>
            <div class="col mb-2">
                <div class="card" style="width: 18rem;">
                    <img src="../img/pink bag.jpg" class="card-img-top" alt="pink_bag">
                    <div class="card-body">
                      <h5 class="card-title">Pink School Bag &#8358;20,000</h5>
                      <p class="card-text">Some product description to make you buy the bag.</p>
                      <a href="../html/single_product.html" class="btn btn-primary"target="_blank">View Product</a>
                    </div>
                  </div>
            </div>
            <div class="col mb-2">
                <div class="card" style="width: 18rem;">
                    <img src="../img/pink bag.jpg" class="card-img-top" alt="pink_bag">
                    <div class="card-body">
                      <h5 class="card-title">Pink School Bag &#8358;20,000</h5>
                      <p class="card-text">Some product description to make you buy the bag.</p>
                      <a href="../html/single_product.html" class="btn btn-primary" target="_blank">View Product</a>
                    </div>
                  </div>
            </div> --}}
            <div class="col mb-2">
                <div class="card" style="width: 18rem;">
                    <img src="../img/pink bag.jpg" class="card-img-top" alt="pink_bag">
                    <div class="card-body">
                      <h5 class="card-title">Pink School Bag &#8358;20,000</h5>
                      <p class="card-text">Some product description to make you buy the bag.</p>
                      <a href="../html/single_product.html" class="btn btn-primary" target="_blank">View Product</a>
                    </div>
                  </div>
            </div>
        </main>
    </div>
    <div class="border-top mt-3"></div>
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
</body>
