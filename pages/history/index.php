<?php

require("../../src/server/connection.php");
require("../../src/server/getter/get_transactions.php");
require("../../src/server/helper/print_alert.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <!-- Datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    
    <!-- Init new DataTables using jquery -->
    <script type="text/javascript" charset="utf-8">
      $(document).ready( function () {
        $('#table_id').DataTable({
          'scrollX': true
        });
      });
    </script>
    
    <!-- Manifest -->
    <link rel="manifest" href="../../manifest.json" type="aplication/json" >
    <meta name="theme-color" content="#0d6efd">

    <!-- Icon -->
    <link rel="icon" href="../../src/public/images/icons/icon-144x144.png" size="144x144" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.css">

    <title>POS - History</title>
  </head>
  <body>
    <!-- Navbar -->
    <section data-root="navbar"></section>
    <!-- Jumbotron -->
    <section data-root="jumbotron"></section>

    <!-- Main -->
    <main class="container-md px-4 mt-5">
      
      <!-- Breadcumb -->
      <div class="mb-5" data-root="breadcumb"></div>
      
      <h1 class="mb-5">
        History transaction
      </h1>
      
      <!-- Alert -->
      <?php print_alert() ?>
      
      <!-- Table -->
      <table class="table table-striped" style="width: 100%" id="table_id">
        <thead>
          <tr>
            <th>No</th>
            <th>ID Transaction</th>
            <th>ID Item</th>
            <th>Name</th>
            <th>Amount</th>
            <th>Price</th>
            <th>Total</th>
            <th>Cash</th>
            <th>Money Changes</th>
            <th>Timestamp</th>
            <th>Actions</th>
          </tr>
        </thead>
        
        <tbody>
          <?php
          $no = 1;
          //Render data
          foreach ( get_transactions($conn) as $item )
          {
            //Parsing data
            $transactionIdTxt = $item["transaction_id_txt"];
            $transactionId = $item["transaction_id"];
            $transactionAmount = $item["transaction_amount"];
            $transactionTotal = $item["transaction_total"];
            $transactionCash = $item["transaction_cash"];
            $transactionMoneyChanges = $item["transaction_money_changes"];
            $transactionCreateAt = $item["transaction_create_at"];
            $itemIdTxt = $item["item_id_txt"];
            $itemName = $item["item_name"];
            $itemPrice = $item["item_price"];
            
            echo "
              <tr>
                <td>$no</td>
                <td>$transactionIdTxt</td>
                <td>$itemIdTxt</td>
                <td>$itemName</td>
                <td>$transactionAmount</td>
                <td>$itemPrice</td>
                <td>$transactionTotal</td>
                <td>$transactionCash</td>
                <td>$transactionMoneyChanges</td>
                <td>$transactionCreateAt</td>
                <td>
                  <a class=\"btn btn-danger\" href=\"../../src/server/setter/remove_transaction.php?key=$transactionId\">
                    <i class=\"fa fa-trash\"></i>
                  </a>
                </td>
              </tr>";
            //Increment number
            $no++;
          }
          ?>
        </tbody>
      </table>
    </main>    
    
    <!-- Footer -->
    <section data-root="footer"></section>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../../src/main.js" type="module" charset="utf-8"></script>
    <script src="../../src/views/History.js" type="module" charset="utf-8"></script>
  </body>
</html>