<?php

//Connection
require("../connection.php");

//Get primary key from url
$key = $_GET["key"];

//SQL
$sql = "DELETE FROM items WHERE `item_id` = '$key'";

//Query
$res = mysqli_query($conn, $sql);

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