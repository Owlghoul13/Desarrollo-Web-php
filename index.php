<?php

//iniciar o reanudar la sesión del usuario actual

session_start();

if (isset($_SESSION['user_id'])){
    //el usuario esta logeado
    header("Location: dashboard");
    exit(); //siempre que haya redireccionamiento
} else{
    //si no hay SESSION es porque no hay usuario
    header("Location: user/login");
    exit();
}