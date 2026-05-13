<?php

session_start();

if (isset($_SESSION['user_id'])){
    //el usuario ya esta logeado
    header("Location: ../../../dashboard/");
    exit(); //siempre que haya redireccionamiento
} 
    $formUsername = $_POST['username'];
    $formPassword = $_POST['password'];

    $user = 'proyecto@web.cl';
    $pass = 'holaMundo';

    if($user === $formUsername && $pass === $formPassword){
        $_SESSION['user_id'] = 1;
        $_SESSION['user_name'] = 'profe :v';

    header("Location: ../../../dashboard/");
    exit();


    }
     
    echo 'user y pass invalidos';
    