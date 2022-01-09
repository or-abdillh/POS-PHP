<?php

  require("../../src/server/helper/print_alert.php");

?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <!-- Manifest -->
    <link rel="manifest" href="../../manifest.json" type="aplication/json" >
    <meta name="theme-color" content="#0d6efd">

    <!-- Icon -->
    <link rel="icon" href="../../src/public/images/icons/icon-144x144.png" size="144x144" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.css">

    <title>POS - Login</title>
  </head>
  <body>
    <section class="vh-100 bg-primary">
      <?php print_alert() ?>
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem;">
              <div class="row g-0">
                <div class="col-12 d-flex align-items-center">
                  <div class="card-body p-4 p-lg-5 text-black">
                    <form action="../../src/server/helper/login.php" method="POST">
    
                      <div class="d-flex align-items-center mb-3 pb-1">
                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                        <span class="h1 fw-bold mb-0">POS</span>
                      </div>
    
                      <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
    
                      <div class="form-outline mb-4">
                        <input type="text" id="username" name="username" class="form-control form-control-lg" />
                        <label class="form-label" for="username">Username</label>
                      </div>
    
                      <div class="form-outline mb-4">
                        <input type="password" id="password" name="password" class="form-control form-control-lg" />
                        <label class="form-label" for="password">Password</label>
                      </div>
    
                      <div class="pt-1 mb-4">
                        <button class="btn btn-dark btn-lg btn-block" name="login" type="submit">Login</button>
                      </div>
                      <a href="#!" class="small text-muted">Developed by </a>
                      <a href="#!" class="small text-muted">Oka R. Abdillah</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>