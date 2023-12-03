
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
                <div class="col-md-6">

                    <div class="card mt-5">
                        <div class="card-header">
                            <h3 class="text-muted text-center">Sign Up To One Day</h3>
                        </div>
                        <div class="card-body">
                    
                            <form action="./access/signupfunction.php" method="POST" enctype="multipart/form-data">
                                <div class="input-group my-3 mt-5">
                                    <div class="input-group-prepend bg-primary text-light d-flex justify-content-center align-items-center p-3">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Name"/>
                                </div>

        
                                <div class="input-group my-3">
                                    <div class="input-group-prepend bg-primary text-light d-flex justify-content-center align-items-center p-3">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="E-mail">
                                </div>
        
                                <div class="input-group my-3">
                                    <div class="input-group-prepend bg-primary text-light d-flex justify-content-center align-items-center p-3">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                </div>

                                <div class="input-group my-3">
                                    <div class="input-group-prepend bg-primary text-light d-flex justify-content-center align-items-center p-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <input type="date" name="dob" id="dob" class="form-control" placeholder="Birth date">
                                </div>
        
                                <div class="input-group my-3">
                                    <div class="input-group-prepend bg-primary text-light d-flex justify-content-center align-items-center p-3">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <input type="text" name="city" id="city" class="form-control" placeholder="City">
                                </div>
        
                                <div class="form-group my-3">
                                    <label for="profile" class="text-muted small"><i class="fas fa-image"></i>Profile</label>
                                    <input type="file" name="profile" id="profile" class="form-control" placeholder="Profile">
                                </div>

                                <div class="form-group my-3">
                                    <label for="customer" class="me-5">Choose your role:</label>
                                    <input type="radio" id="customer" name="role" value="customer" class="form-check-input mx-3" checked/><label for="customer">Customer</label>
                                    <input type="radio" id="admin" name="role" value="admin" class="form-check-input mx-3"/><label for="admin">Admin</label>
                                </div>
        
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary" name="signup">Sign Up</button>
                                </div>
        
                                <p>Already sign up ? <a href="signin.php">sign in here.</a></p>
                        
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
