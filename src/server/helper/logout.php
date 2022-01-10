<?php

//handler for logout
session_start();
$_SESSION["login"] = null;
$_SESSION["fullname"] = null;
$_SESSION["role"] = null;

session_destroy();

//Redirect
header("Location: ../../../pages/login");