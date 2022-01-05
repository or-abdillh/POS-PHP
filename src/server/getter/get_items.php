<?php

function get_items( $conn )
{
    //Create sql
    $sql = "SELECT * FROM items";
    //Query
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