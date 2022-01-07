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

$res = mysqli_query( $conn, $sql );

//Redirect with url params
if ( !$res )
{
  //Get error message
  $err = mysqli_error($conn);
  //Redirect
  header(
    "Location: ../../../pages/items?code=501&msg=$err"
    );
} else header("Location: ../../../pages/items?code=200");