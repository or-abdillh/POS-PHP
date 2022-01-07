<?php

  require("../../src/server/connection.php");
  require("../../src/server/getter/get_items.php");

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
    <main class="container-md px-4 mt-5 ">
      
      <!-- Breadcumb -->
      <div class="mb-5" data-root="breadcumb"></div>
      
      
      <div class="d-flex justify-content-between mb-5">

          <h1>
            Manage Items
          </h1>

          <!-- New item -->
          <a data-bs-toggle="modal" data-bs-target="#modalNewItem" class="btn btn-success d-flex gap-2 justify-content-center align-items-center" href="">
            <i class="fa fa-plus"></i>
            New item
          </a>
      </div>
      
      <!-- Table -->
      <table class="table table-striped" style="width: 100%;" id="table_id">
        <thead>
          <tr>
            <th>No</th>
            <th>ID Item</th>
            <th>Name</th>
            <th>Price</th>
            <th>Last Modified</th>
            <th>Create at</th>
            <th>Actions</th>
          </tr>
        </thead>
        
        <tbody>
          <?php
            $no = 1;
            foreach( get_items($conn) as $item )
            {
              $item_id = $item["item_id"];
              $item_id_txt = $item["item_id_txt"];
              $item_name = $item["item_name"];
              $item_price = $item["item_price"];
              $last_modified = $item["last_modified"];
              $create_at = $item["create_at"];

              //Render
              echo <<<EOT
              <tr>
                <td>$no</td>
                <td>$item_id_txt</td>
                <td>$item_name</td>
                <td>Rp $item_price</td>
                <td>$last_modified</td>
                <td>$create_at</td>
                <td class="text-center">
                    <div class="d-flex justify-content-center gap-2">
                        <a href="../../src/server/setter/remove_item.php?key=$item_id" class="btn btn-danger btn-sm text-light">
                          <i class="fa fa-trash"></i>
                        </a>
                        <a href="#" data-bs-toggle="modal" data-role="trigger" data-bs-target="#modalUpdate" 
                          data-item-name="$item_name" data-item-id="$item_id" data-item-price="$item_price" data-item-id-text="$item_id_txt" class="btn btn-primary btn-sm text-light">
                          <i class="fa fa-edit"></i>
                        </a>
                    </div>
                </td>
              </tr>
EOT;
              //increment table number
              $no++;
            }
          ?>
        </tbody>
      </table>
    </main>

    <section data-root="modal"></section>
    <section data-root="modal-update"></section>
    
    <!-- Footer -->
    <section data-root="footer"></section>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../../src/main.js" type="module" charset="utf-8"></script>
    <script src="../../src/views/Items.js" type="module" charset="utf-8"></script>
  </body>
</html>