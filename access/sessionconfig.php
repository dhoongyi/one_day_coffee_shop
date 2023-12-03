<?php

session_start();

function sessionset($key,$value){
    $_SESSION[$key] = $value;
}

function sessionread($key){
    return $_SESSION[$key];
}

function textfilter($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);

    return $data;
}

function authfail(){
    if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
        return true;
    }
}

function destroysession($key){
    unset($_SESSION[$key]);
}

// echo authfail();
?>