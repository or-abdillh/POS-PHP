<?php

//Connection
require("../connection.php");

//Get primary key from url
$key = $_GET["key"];

//SQL
$sql = "DELETE FROM items WHERE `item_id` = '$key'";

//Query
mysqli_query($conn, $sql);

//Redirect
header("Location: ../../pages/items");