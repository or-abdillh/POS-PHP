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
  $res = mysqli_query($conn, $sql);
  
  //Redirect with url params
  if ( !$res )
  {
    //Get error message
    $err = mysqli_error($conn);
    //Redirect
    header(
      "Location: ../../../pages/history?code=501&msg=$err"
      );
  } else header("Location: ../../../pages/history?code=200");
}