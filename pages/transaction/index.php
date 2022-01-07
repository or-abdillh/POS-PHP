<?php

require("../../src/server/connection.php");
require("../../src/server/getter/get_items.php");
require("../../src/server/helper/print_alert.php");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Manifest -->
    <link rel="manifest" href="../../manifest.json" type="aplication/json" >
    <meta name="theme-color" content="#0d6efd">

    <!-- Icon -->
    <link rel="icon" href="../../src/public/images/icons/icon-144x144.png" size="144x144" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.css">

    <title>POS - Create new transaction</title>
  </head>
  <body>
    <!-- Navbar -->
    <section data-root="navbar"></section>
    <!-- Jumbotron -->
    <section data-root="jumbotron"></section>

    <!-- Main -->
    <main class="container-md px-4 mt-5 d-lg-flex gap-3 justify-content-between justify-content-lg-center">
      
      <!-- Breadcumb -->
      <div class="mb-5" data-root="breadcumb"></div>
      
      <h1 class="mb-3">
        Create new transaction
      </h1>
      
      <!-- Alert -->
      <?php print_alert() ?>
      
      <!-- Form -->
      <form method="POST" action="../../src/server/setter/set_transaction.php">
          <!-- Id Transaction -->
          <div class="mb-3">
              <label for="transactionId" class="form-label">ID Transaction</label>
              <input type="text" placeholder="ex: TRX0001" name="transactionId" class="form-control form-control-lg" id="idTransaction" aria-describedby="idTransactionHelp" required >
              <div id="idTransactionHelp" class="form-text">transaction ID is used to mark each transaction</div>
          </div>
          <!-- Name of item -->
          <div class="mb-3">
              <input type="hidden" name="itemId" value="" required >
              <label for="nameOfItem" class="form-label">Name of item</label>
              <select data-role="select-items" class="form-select form-select-lg" aria-label=".form-select-lg example" name="nameOfItem" id="nameOfItem">
                <option selected="">--Choose item</option>
                <?php
                  foreach ( get_items($conn) as $item )
                  {
                    //Get ID, Name, Price
                    $item_id = $item["item_id"];
                    $item_name = $item["item_name"];
                    $item_price = $item["item_price"];
                    
                    //Render option with pattern value = id@name@price
                    echo <<<EOT
                      <option value="$item_id@$item_name@$item_price"> $item_name </option>
EOT;
                  }
                ?>
              </select>
          </div>

          <!-- amount of item -->
          <label for="amountOfItem" class="form-label">Amounts of item</label>
          <div class="input-group mb-3">
              <span class="input-group-text">Pcs</span>
              <input type="number" placeholder="ex: 2" name="amountOfItem" class="form-control form-control-lg" id="amountOfItem" required >
          </div>
          
          <!-- price per units -->
          <label for="pricePerUnit" class="form-label">Price per unit</label>
          <div class="input-group mb-3">
              <span class="input-group-text">Rp.</span>
              <input type="text" name="pricePerUnit" class="form-control form-control-lg" id="pricePerUnit" readonly>
          </div>
          
          <!-- total per units -->
          <label for="total" class="form-label">Total</label>
          <div class="input-group mb-3">
              <span class="input-group-text">Rp.</span>
              <input type="text" name="total" class="form-control form-control-lg" id="total" readonly>
          </div>
          
          <!-- cash from customer -->
          <label for="cash" class="form-label">Cash</label>
          <div class="input-group mb-3">
              <span class="input-group-text">Rp.</span>
              <input type="text" placeholder="ex: 45.000,00" name="cash" class="form-control form-control-lg" id="cash" required >
          </div>
          
          <!-- money changes customer -->
          <label for="moneyChanges" class="form-label">Money Changes</label>
          <div class="input-group mb-3">
              <span class="input-group-text">Rp.</span>
              <input type="text" name="moneyChanges" class="form-control form-control-lg" id="moneyChanges" readonly>
          </div>
          
          <!-- Buttons -->
          <button name="create_new_transaction" class="btn btn-primary" type="submit">Submit</button>
          <button class="btn btn-secondary" type="reset">Reset</button>
      </form>
    </main>    
    
    <!-- Footer -->
    <section data-root="footer"></section>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../../src/main.js" type="module" charset="utf-8"></script>
    <script src="../../src/views/Transaction.js" type="module" charset="utf-8"></script>
  </body>
</html>