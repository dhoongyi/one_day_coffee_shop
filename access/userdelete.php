<?php  

ini_set("display_errors",1);

require_once "./dbconnect.php";



if($_SERVER['REQUEST_METHOD']){
    if(isset($_POST['delete'])){
        // echo "Hey I am Delete";


        try{

            $getid = $_POST['delete'];

            $stmt = $con->prepare("DELETE FROM customers WHERE id = :id");
            $stmt->bindParam(":id",$bindid);
            $bindid = $getid;

            $stmt->execute();

        }catch(PDOException $e){
            echo $e->getMessage();
        }
        

    }
}

?>