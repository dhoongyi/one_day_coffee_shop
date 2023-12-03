<?php

ini_set("display_errors",1);

require_once "./dbconnect.php";

require_once "./sessionconfig.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['signup'])){
        $getname = textfilter($_POST['fullname']);
        $getemail = textfilter($_POST['email']);
        $getpassword = md5(textfilter($_POST['password']));
        $getdob = textfilter($_POST['dob']);
        $getcity = textfilter($_POST['city']);
        $getrole = textfilter($_POST['role']);
        // $getname = textfilter($_POST['fullname']);

        $uploaddir = "./../profiles/";
        $filename = $_FILES['profile']['name'];
        $uploadtype = explode(".",$filename);
        $uploadtype = strtolower(end($uploadtype));

        $getfilename = round(microtime(true)).".".$uploadtype;
        $getuploadfilename = $uploaddir.basename($getfilename);

        $fileext = ['jpg','jpeg','png','gif'];
        $errors = [];

        if(in_array($uploadtype,$fileext) === false){
            $errors = "we only allow to upload jpg, jpeg , png & gif";
        }

        if($_FILES['profile']['size'] > 1000000){
            $errors = "your file size is too large to upload";
        }

        if(empty($errors)){
            move_uploaded_file($_FILES['profile']['tmp_name'],$getuploadfilename);

            $getprofile = $getuploadfilename;
        }else{
            echo "<pre>".print_r($errors,true)."</pre>";
        }

        

        $stmt = $con->prepare("INSERT INTO customers (name,email,password,birthdate,role,city,profile) VALUES(:name,:email,:password,:dob,:role,:city,:profile)");
        $stmt->bindParam(":name",$bindname);
        $stmt->bindParam(":email",$bindemail);
        $stmt->bindParam(":password",$bindpassword);
        $stmt->bindParam(":dob",$binddob);
        $stmt->bindParam(":role",$bindrole);
        $stmt->bindParam(":city",$bindcity);
        $stmt->bindParam(":profile",$bindprofile);

        $bindname = $getname;
        $bindemail = $getemail;
        $bindpassword = $getpassword;
        $binddob = $getdob;
        $bindrole = $getrole;
        $bindcity = $getcity;
        $bindprofile = $getprofile;

        $stmt->execute();

        header("Location:./../successful.php");

        sessionset("email",$getemail);
        sessionset("password",$getpassword);

        // echo sessionread("email");

    }
}




// CREATE TABLE IF NOT EXISTS customers(
//     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(255),
//     email VARCHAR(191) UNIQUE,
//     password VARCHAR(255),
//     birthdate VARCHAR(255),
//     role VARCHAR(255) DEFAULT("customer"),
//     city VARCHAR(255),
//     profile VARCHAR(255)
// );