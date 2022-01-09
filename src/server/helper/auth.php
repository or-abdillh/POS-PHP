<?php

//Authentication
//Navigation guard

function auth()
{
  //Get data from session
  session_start();
  
  if ( isset($_SESSION["login"]) && isset($_SESSION["role"]) )
  {
    return true;
  } else return false;
}