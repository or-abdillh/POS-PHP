<?php

//Handler for render alert boostrap element

function print_alert()
{
  if ( isset($_GET["code"]) )
  {
    switch ($_GET["code"])
    {
      case "200": 
        echo "
          <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <strong>Action success!</strong> Your action was successfully, have a nice day</strong>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
          </div>
        ";
        break;
        default:
          //Get error message
          $err = $_GET["msg"];
          echo "
          <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <strong>Action failed!</strong> $err </strong>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
          </div>
        ";
    }
  }
}