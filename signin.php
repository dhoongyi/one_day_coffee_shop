
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
        <!-- <link href="./css/signinstyle.css" rel="stylesheet" type="text/css"/> -->
    </head>
    <style type="text/css">
        body{
            background-color: #008080;
        }
        .card{
            background-color: #f4f4f4;
        }
    </style>
    <body>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mt-5">

                    <div class="card shadow mt-5">
                        <div class="card-header">
                            <h3 class="text-muted text-center">Sign In To One Day</h3>

                        </div>
                        <div class="card-body">
                            
                            <form action="./access/signinfunction.php" method="POST" enctype="multipart/form-data">
                                <div class="input-group my-3 mt-5">
                                    <div class="input-group-prepend bg-primary text-light d-flex justify-content-center align-items-center p-3">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="E-mail"/>
                                </div>
        
                                <div class="input-group my-3">
                                    <div class="input-group-prepend bg-primary text-light d-flex justify-content-center align-items-center p-3">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                </div>
        
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary" name="login">Log In</button>
                                </div>
        
                                <p>Not sign up ? <a href="signup.php">sign up here.</a></p>
                            </form>
                    
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
        <!-- <script src="./js/signinapp.js" type="text/javascript"></script> -->
    </body>
</html>
