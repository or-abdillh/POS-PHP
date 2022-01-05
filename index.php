<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Manifest -->
    <link rel="manifest" href="./manifest.json" type="aplication/json" >
    <meta name="theme-color" content="#0d6efd">

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
    <section data-root="navbar"></section>
    <!-- Jumbotron -->
    <section data-root="jumbotron"></section>

    <!-- Main -->
    <main class="container-md mt-5 d-lg-flex gap-3 justify-content-between justify-content-lg-center">
        <!-- Create transaction -->
        <div data-root="card"></div>
        <!-- Show all list transaction -->
        <div data-root="card"></div>
        <!-- Manage your items -->
        <div data-root="card"></div>
    </main>    
    
    <!-- Footer -->
    <section data-root="footer"></section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./src/main.js" type="module" charset="utf-8"></script>
    <script src="./src/views/Home.js" type="module" charset="utf-8"></script>
  </body>
</html>