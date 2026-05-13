<?php

session_start();

//matar la sesión
$_SESSION = array();

session_destroy();

if(count($_SESSION)==0){
    header("Location: ../../");
    exit();
}