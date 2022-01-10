<?php

//Login handler
require("../connection.php");

if ( isset($_POST["login"]) )
{
  //GET FORM
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  //SQL 
  $sql = "SELECT accounts.fullname, roles.role FROM accounts INNER JOIN roles 
    ON ( accounts.username = '$username' AND accounts.password = '$password' AND accounts.id_role = roles.id_role )
  ";
  
  //Query
  $res = mysqli_query($conn, $sql);
  $accounts = [];
  
  while ( $row = mysqli_fetch_assoc($res) )
  {
    array_push($accounts, $row);
  }

  //Login success
  if ( count($accounts) > 0 )
  {
    session_start();
    //Create new key
    $_SESSION["login"] = true;
    $_SESSION["role"] = $accounts[0]["role"];
    $_SESSION["fullname"] = $accounts[0]["fullname"];
    
    //Redirect
    header("Location: ../../../");
  } else header("Location: ../../../pages/login?code=403&msg=Login%20failed");
  
}