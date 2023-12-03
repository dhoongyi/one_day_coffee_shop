<?php

$dbhost = "localhost";
$dbuser = "root";
$dbname = "oneday";
$dbpass = "";

try{
    $con = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    // header("Location:./../successful.php");
}catch(PDOException $e){
    echo "Connection error".$e->getMessage();
}