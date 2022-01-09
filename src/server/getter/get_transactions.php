<?php

//Handler for query all records from table transactions 

function get_transactions( $conn )
{
  //Create sql inner join
  $sql = "
    SELECT transactions.transaction_id_txt, transactions.transaction_id, transactions.transaction_amount, transactions.transaction_total, transactions.transaction_cash, transactions.transaction_money_changes, transactions.transaction_create_at, items.item_id_txt, items.item_name, items.item_price 
    FROM transactions INNER JOIN items ON transactions.item_id = items.item_id
  ";
  
  //query
  $results = mysqli_query($conn, $sql);
  
  //Wrapper
  $rows = [];
    //Save each row into wrapper
    while ( $res = mysqli_fetch_assoc( $results ))
    {
        array_push( $rows, $res );
    }
    
    return $rows;
}