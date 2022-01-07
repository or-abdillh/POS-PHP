<?php

//Handler for remove transaction from table transactions

//Connection
require("../connection.php");

//Get primary key from url
if ( isset($_GET["key"]) )
{
  //Key
  $key = $_GET["key"];
  
  //Create sql
  $sql = "DELETE FROM transactions WHERE transaction_id = '$key'";
  
  //query
  mysqli_query($conn, $sql);
  
  //Redirect
  header("Location: ../../../pages/history");
}