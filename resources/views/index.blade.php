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
    <link rel="stylesheet" href="../css/style.css">
    <title>e-commerce app | Home</title>
</head>
<body>
        <nav class="navbar navbar-expand navbar-dark bg-primary" aria-label="Fourth navbar example">
            <div class="container-fluid px-5">
              <a class="navbar-brand dark-blue" href="#">HOME</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        
              <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item">
                    <a class="nav-link active dark-blue" aria-current="page" href="./shop.html">SHOP</a>
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
          <div class="container col-xxl-8 px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="../img/hero-img.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Lorem gives the best rates!</h1>
                    <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, consectetur tempora. Expedita aperiam ullam ratione dolor blanditiis nihil, recusandae quam impedit labore debitis inventore repudiandae! Quibusdam nemo nihil tempore omnis?</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Login</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Sign-up</button>
                    </div>
                </div>
                </div>
          </div>
          <div class="border-top"></div>
          <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 bg-primary px-5 mt-auto">
            <p class="col-md-4 mb-0 text-white">&copy; 2022 Lorem, Inc</p>
        
            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
              <h2 class="logo">Lorem!</h2>
            </a>
        
            <ul class="nav col-md-4 justify-content-end color-black">
              <li class="nav-item"><a href="./index.html" class="nav-link px-2 text-white">Home</a></li>
              <li class="nav-item"><a href="./shop.html" class="nav-link px-2 text-white">Shop</a></li>
              <li class="nav-item"><a href="./login.html" class="nav-link px-2 text-light">Login</a></li>
              <li class="nav-item"><a href="./signup.html" class="nav-link px-2 text-white">Sign Up</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-white">About</a></li>
            </ul>
          </footer>
</body>
</html>