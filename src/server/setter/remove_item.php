<?php

//Connection
require("../connection.php");

//Use session
session_start();

//Get primary key from url
$key = $_GET["key"];

//Check if owner has login
$is_owner = $_SESSION["role"] == "Owner" ? true : false;

//SQL
$sql = "DELETE FROM items WHERE `item_id` = '$key'";

//Query
if ( $is_owner ) $res = mysqli_query($conn, $sql);
else $res = true;

//Redirect with url params
if ($res)
{
  if (!$is_owner) header("Location: ../../../pages/items?code=403&msg=Only%20the%20owner%20can%20do%20this%20action");
  else header("Location: ../../../pages/items?code=200");
}
else
{
  //Get error
  $err = mysqli_error($conn);
  header("Location: ../../../pages/items?code=501&msg=$err");
}