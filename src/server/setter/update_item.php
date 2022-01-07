<?php

//Handler for update item
//Connection
require("../connection.php");

//Set timezone
date_default_timezone_set('Asia/Singapore');

//Get key
$key = $_POST["item_id"];

//Get form
$item_id_txt = $_POST["item_id_text"];
$item_name = $_POST["item_name"];
$item_price = $_POST["item_price"];
$last_modified = date('m/d/Y h:i:s a', time());

//Create sql
$sql = "UPDATE items SET `item_id_txt` = '$item_id_txt', 
  `item_name` = '$item_name', `item_price` = '$item_price', `last_modified` = '$last_modified' 
  WHERE `item_id` = '$key'";
  
//Query
$res = mysqli_query($conn, $sql);

//Redirect
header("Location: ../../../pages/items");