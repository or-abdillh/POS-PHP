<?php

//Handler for set new transation
//Connection
require("../connection.php");

if ( isset($_POST["create_new_transaction"]) )
{
  //Set timezone
  date_default_timezone_set('Asia/Singapore');
  
  //Get form
  $item_id = $_POST["itemId"];
  $transaction_id = $_POST["transactionId"];
  $transaction_amount = $_POST["amountOfItem"];
  $transaction_total = $_POST["total"];
  $transaction_cash = $_POST["cash"];
  $transaction_money_changes = $_POST["moneyChanges"];
  $transaction_create_at = date('m/d/Y h:i:s a', time());
  
  //SQl
  $sql = "
  INSERT INTO transactions VALUES ('', '$item_id', '$transaction_id', '$transaction_create_at', '$transaction_amount', '$transaction_total', '$transaction_cash', '$transaction_money_changes') 
  ";
  
  //Query
  $res = mysqli_query($conn, $sql);

  //Redirect with url params
  if ( !$res )
  {
    //Get error message
    $err = mysqli_error($conn);
    //Redirect
    header(
      "Location: ../../../pages/transaction?code=501&msg=$err"
      );
  } else header("Location: ../../../pages/transaction?code=200"); 
}
