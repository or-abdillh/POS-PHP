<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Manifest -->
    <link rel="./manifest.json" type="aplication/json" rel="manifest" >

    <!-- Icon -->
    <link rel="icon" href="./public/images/icons/icon-144x144.png" size="144x144" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="./node_modules/@fortawesome/fontawesome-free/css/all.css">

    <title>POS - Point Of Sale</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-primary">
        <div class="container-fluid d-flex justify-content-center">
            <img src="./public/logo.png" alt="" width="150" class="d-inline-block align-text-top">
        </div>
    </nav>      

    <!-- Headline -->
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light bg-gradient">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">Point Of Sale</h1>
            <p class="lead fw-normal">Website-based purchase transaction recording application using native PHP, Bootstrap and MySQL</p>
            <a class="btn btn-outline-secondary" target="blank" href="https://github.com/or-abdillh">
                <i class="fab fa-github"></i>
                Contact Developer
            </a>
        </div>
    </div>

    <!-- Main -->
    <main class="container-md mt-5 d-lg-flex gap-3 justify-content-between justify-content-lg-center">

    <!-- Create transaction -->
        <div class="card mb-5">
            <div class="card-header bg-success text-light">
                <i class="fas fa-cart-plus"></i>
                Create transaction
            </div>
            <div class="card-body">
                <h5 class="card-title">Create new transaction from order</h5>
                <p class="card-text">You can create new transaction here</p>
                <a href="#" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-right"></i>
                    Next
                </a>
            </div>
        </div>
    
    <!-- Show all list transaction -->
        <div class="card mb-5">
            <div class="card-header bg-secondary text-light">
                <i class="fas fa-history"></i>
                History transaction
            </div>
            <div class="card-body">
                <h5 class="card-title">See all history transaction</h5>
                <p class="card-text">You can see all history transaction here</p>
                <a href="#" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-right"></i>
                    Next
                </a>
            </div>
        </div>

        <!-- Manage your items -->
        <div class="card mb-5">
            <div class="card-header bg-dark text-light">
                <i class="fas fa-tasks"></i>
                Manage Items
            </div>
            <div class="card-body">
                <h5 class="card-title">Manage all your items</h5>
                <p class="card-text">You can manage your items here</p>
                <a href="#" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-right"></i>
                    Next
                </a>
            </div>
        </div>

    </main>    
    
    <footer class="container-lg mt-5 text-center">
        <p class="fw-bold">Developed by 
            <a class="text-decoration-none" href="https://github.com/or-abdillh">Oka R. Abdillah</a>    
             - made with <i class="fas fa-heart text-danger"></i> and a cup of <i class="fas fa-mug-hot"></i></p>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>