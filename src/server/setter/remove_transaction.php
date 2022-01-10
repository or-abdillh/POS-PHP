<?php

//Handler for remove transaction from table transactions
//Connection
require("../connection.php");

//Use sessionn
session_start();

//Get primary key from url
if ( isset($_GET["key"]) )
{
  //Key
  $key = $_GET["key"];
  
  //Check if owner has login
  $is_owner = $_SESSION["role"] == "Owner" ? true : false;
  
  //Create sql
  $sql = "DELETE FROM transactions WHERE transaction_id = '$key'";
  
  //query
  $res = mysqli_query($conn, $sql);
  
  //Redirect with url params
  if ($res)
  {
    if (!$is_owner) header("Location: ../../../pages/history?code=403&msg=Just%20Owner%20Can%20Do%20it%20this%20action");
    else header("Location: ../../../pages/history?code=200");
  }
  else
  {
    //Get error
    $err = mysqli_error($conn);
    header("Location: ../../../pages/history?code=501&msg=$err");
  }
}