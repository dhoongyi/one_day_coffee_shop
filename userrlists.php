<?php

ini_set("display_errors",1);

require_once "./access/dbconnect.php";

require_once "./access/sessionconfig.php";

try{
    $stmt = $con->prepare("SELECT id,name,email,birthdate,city,role,profile FROM customers");
    $stmt->execute();
}catch(PDOException $e){
    echo $e->getMessage();
}


// echo sessionread('role');

if(authfail() || sessionread("role") === "customer"){
    header("Location:./signup.php");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>OneDay Cafe</title>
        <!-- fav icon -->
        <link href="./assets/img/icon/icon1.png" style="border-radius:50%;" rel="icon" type="image/png"/>
        <!-- bootstrap -->
        <link href="./assets/libs/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- custom css -->
        <link href="./css/signinstyle.css" rel="stylesheet" type="text/css"/>
    </head>
    <style type="text/css">
        .profileimg{
            width: 50px;
            height: 50px;
        }
    </style>
    <body>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col">

                    <div class="card shadow mt-5">
                        <div class="card-header">
                            <h3 class="text-muted text-center">Client Lists</h3>
                        </div>
                        <div class="card-body">
                    
                            <table class="text-center table table-bordered table-striped">
                                <thead>
                                    <tr class="bg-secondary text-light">
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>E-mail</th>
                                        <th>Date of birth</th>
                                        <th>City</th>
                                        <th>Profile</th>
                                        <th>Role</th>
                                        <th>Remove Account</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                        while($row = $stmt->fetch()):

                                    ?>

                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?= $row['name']; ?></td>
                                        <td><?= $row['email']; ?></td>
                                        <td><?= $row['birthdate']; ?></td>
                                        <td><?= $row['city']; ?></td>
                                        <td><img src="<?php echo "./phpproject/".$row['profile']; ?>" class="profileimg rounded-circle" alt="customers"></td>
                                        <td><?= $row['role']; ?></td>
                                        <td>
                                            <form action="./access/userdelete.php" method="POST">
                                                <button type="submit" class="btn btn-danger btn-lg " name="delete" value="<?php echo $row['id']; ?>"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>

                                    <?php
                                        endwhile;
                                    ?>
                                </tbody>
                            </table>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>



        
        

        <!-- bootstrap -->
        <script src="./assets/libs/bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- jquery -->
        <script src="./assets/libs/jquery/jquery-3.7.0.min.js" type="text/javascript"></script>
        <!-- google chart -->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <!-- custom js -->
        <script src="./js/signinapp.js" type="text/javascript"></script>
    </body>
</html>
