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
        body{
            height: 100vh;

            background-color: #444;

            display: flex;
            justify-content: center;
            align-items: center;

            flex-direction: column;

        }

        .box{
            background-color: #008080;
        }
        .card{
            border-radius: 20px;

            overflow: hidden;
        }
    </style>
    <body>


        <div class="card shadow">
            <div class="card-body box">
                <div class="d-flex justify-content-center p-5">
                    <i class="fas fa-check-circle fa-6x text-light"></i>
                </div>
                <p class="text-light display-5 px-4"><i>You created an account successfully.</i></p>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center p-3">
                    <a href="./signin.php" class="btn btn-success btn-lg rounded-pill shadow">Continue to Login</a>
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
