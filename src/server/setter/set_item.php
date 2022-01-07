<?php

//Connection
require("../connection.php");

//Set timezone
date_default_timezone_set('Asia/Singapore');

//Get form
$item_id_txt = $_POST["idItem"];
$item_name = $_POST["nameItem"];
$item_price = $_POST["priceItem"];
$create_at = date('m/d/Y h:i:s a', time());

//Create SQL
$sql = "INSERT INTO items ( `item_id_txt`, `item_name`, `item_price`, `create_at` ) 
    VALUES ( '$item_id_txt', '$item_name', '$item_price', '$create_at' )";

$results = mysqli_query( $conn, $sql );

header("Location: ../../../pages/items");