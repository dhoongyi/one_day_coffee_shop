<?php

    ini_set("display_errors",1);

    require_once "./sessionconfig.php";

    if(isset($_POST["seeuser"])){
        // echo "hello";


        if(sessionread("role") === "customer"){
            header("Location:./../mainpage.php");

        }else{
            header("Location:./../userrlists.php");

        }
    }   


?>