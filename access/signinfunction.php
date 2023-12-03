<?php

ini_set("display_errors",1);

require_once "./sessionconfig.php";

require_once "./dbconnect.php";




if($_SERVER['REQUEST_METHOD'] === "POST"){



    if(isset($_POST['login'])){
        // echo "hello";
        $confemail = textfilter($_POST['email']);
        $confpassword = md5(textfilter($_POST['password']));

        $stmt = $con->prepare("SELECT id,email,password,role FROM customers WHERE email=:email");
        $stmt->bindParam(":email",$bindmail);
        $bindmail = $confemail;
        $stmt->execute();

        while($row = $stmt->fetch()){
            $dbid = $row['id'];
            $dbmail = $row['email'];
            $dbpassword = $row['password'];
            $dbrole = $row['role'];
        
        }
        // echo $dbmail,$dbpassword,$dbrole;


        if($dbmail === $confemail && $dbpassword === $confpassword){
            sessionset("email",$dbmail);
            sessionset("password",$dbpassword);
            sessionset("role",$dbrole);
            sessionset("id",$dbid);

            // echo sessionread("role");

            // header("Location:./../mainpage.php"); 
        }

        if(sessionread("email") === $confemail && sessionread("password") === $confpassword){
            header("Location:./../mainpage.php");
        }else{
            header("Location:./../signup.php");
        }
        
             
    }
}


