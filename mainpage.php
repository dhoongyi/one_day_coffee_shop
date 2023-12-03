<?php

ini_set("display_errors",1);

require_once "./access/dbconnect.php";

require_once "./access/sessionconfig.php";

// echo sessionread("role");


$getid = sessionread("id");

try{
    $stmt = $con->prepare("SELECT profile FROM customers WHERE id = :id");
    $stmt->bindParam(":id",$bid);

    $bid = $getid;
    $stmt->execute();
}catch(PDOException $e){
    echo "Error Found".$e->getMessage();
}

while($row = $stmt->fetch()){
    $getpf =  $row['profile'];
}


if(authfail()){
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
        <link href="./css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <!-- Start User List Button  -->
        <div class="userlists p-2">
            <form action="./access/seeuserlist.php" method="POST">
                <button type="submit" class="btn btn-lg text-light p-2" id="user-btn" name="seeuser" title="Customers can't see the list"><i class="fas fa-users"></i></button>
                
                
                <!-- doesn't work with new feature  -->
                <!-- <a href="./userrlists.php" title="see customers" class="btn btn-lg text-light p-2"><i class="fas fa-users"></i></a> -->
            </form>
        </div>
        <!-- End User List Button -->

        <!-- Start Feed Back  -->
        <div class="feedback text-light" id="feedback-s">
            <div class="d-flex align-items-center feedback-header">
                <div class="profiles">
                    <img src="<?php echo "./phpproject/".$getpf; ?>" width="30" height="30" class="rounded-circle" alt="">
                    <div class="dot"></div>
                </div>
                <h6 class="mx-2">Report Feedback</h6>

                <div class="ms-4">
                    <ul class="list-inline align-items-center">
                        <li class="list-inline-item"><a href="javascript:void(0);"><i class="fas fa-ellipsis feedback-icons"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0);"><i class="fas fa-edit feedback-icons"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0);"><i class="fas fa-angle-up feedback-icons"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="feedback-texts">
                <form action="" method="">
                    <div class="form-group">
                        <label for="fullnames" class="mb-2">Fullname:</label>
                        <input type="text" name="fullnames" id="fullnames" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="emails" class="mb-2">Email:</label>
                        <input type="email" name="emails" id="emails" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="feedback" class="mb-2">Feedback:</label>
                        <textarea name="feedback" id="feedback" rows="1" class="form-control"></textarea>
                    </div>

                    <div class="d-grid my-3">
                        <button type="submit" class="btn btn-primary mb-1">Report</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Feed Back -->

        <!-- Start Header Section -->
        <header id="header" class="">
            <nav class="nav navbar-expand-md" id="">
                <div class="container-fluid">
                    <div class="row headernavs">
                        <div class="col-md-4 col-sm-12 my-4">
                             <!-- start nav bar brand -->
                            <div class="navbar-brand text-center">
                                <img src="./assets/img/icon/logo.png" width="90" class="rounded-circle brandlogos" alt="logo1">
                                <span class="brandnames"><span class="fw-bold">OneDay</span> <span>Cafe & Bakery</span></span>
                            </div>
                            <!-- end nav bar brand -->
                        </div>

                        <div class="col-md-8 col-sm-12 my-5 text-left listcols">
                            <a href="javascript:void(0);" class="mainbtncloses navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mainnav"><i class="fas fa-bars fa-lg"></i></a>

                            <div class="navbar-collapse collapse"  id="mainnav">
                                <ul class="navbar-nav mx-auto">
                                    <li class="nav-item mx-4 navlists"><a href="javascript:void(0);" class="nav-link">Menu</a></li>
                                    <li class="nav-item mx-4 navlists"><a href="javascript:void(0);" class="nav-link">Trending</a></li>
                                    <li class="nav-item mx-4 navlists"><a href="javascript:void(0);" class="nav-link">Gift Card</a></li>
                                    <li class="nav-item mx-4 navlists"><a href="javascript:void(0);" class="nav-link">Rewards</a></li>
                                    <li class="nav-item mx-4 navlists"><a href="javascript:void(0);" class="nav-link">Delivery</a></li>
                                    <li class="nav-item mx-4 navlists"><form action="./access/logoutfunction.php" method="POST"><button type="submit" class="nav-link">Log Out</button></form></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- start bnner -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banners">
                                <div class="bannertexts">
                                    <h3 class="text-center display-4 bannerheaders">We Make Coffee With Our Love</h3>
                                    <p class="text-center bannerparams">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum laudantium voluptatum vel, dolorem tempora ducimus sunt? Ut numquam quasi nam, quam, quae, dolorum excepturi possimus voluptates suscipit recusandae corporis et?</p>
                                    <div class="d-flex justify-content-end">
                                        <button type="button" class="bannerbtns">Quick Access</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end banner -->
                </div>
            </nav>
        </header>
        <!-- End Header Section -->

        <!-- Start Menu Section -->
        <section id="menu" class="py-5">
            <div class="container">
                <!-- start title  -->
                <div class="row">
                    <div class="col-md-12 text-center titleboxes">
                        <h3 class="mb-3 fw-bold titles">Avaliable Menu</h3>
                        <p>Welcome to OneDay.Start your day with a cup of coffee. <br/>Choose your food & drink.</p>
                    </div>
                </div>
                <!-- end title  -->
                <div class="row text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item mx-3"><a href="javascript:void(0);" class="nav-link menu-links rounded-pill actives" data="coffee">Coffee</a></li>
                        <li class="list-inline-item mx-3"><a href="javascript:void(0);" class="nav-link menu-links rounded-pill" data="boba">Boba & Smoothie</a></li>
                        <li class="list-inline-item mx-3"><a href="javascript:void(0);" class="nav-link menu-links rounded-pill" data="cake">Cake</a></li>
                        <li class="list-inline-item mx-3"><a href="javascript:void(0);" class="nav-link menu-links rounded-pill" data="drinks">Other Drinks</a></li>
                        <li class="list-inline-item mx-3"><a href="javascript:void(0);" class="nav-link menu-links rounded-pill" data="signature">Signature</a></li>
                        
                    </ul>

                    <div class="d-flex flex-wrap justify-content-center align-items-center menu-container mt-5">
                        <div class="img-boxes boba">
                            <div class="prices">
                                <p>Boba</p>
                                <p>5000mmk</p>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary btn-sm">Order Now</button>
                                </div>
                            </div>
                            <img src="./assets/img/products/tea1.png" class="menu-images" alt="">
                        </div>
                        <div class="img-boxes drinks">
                            <div class="prices">
                                <p>Take Me Home</p>
                                <p>8000mmk</p>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary btn-sm">Order Now</button>
                                </div>
                            </div>
                            <img src="./assets/img/products/cocktail1.jpg" class="menu-images" alt="">
                        </div>
                        <div class="img-boxes drinks">
                            <div class="prices">
                                <p>See You Tomorrow</p>
                                <p>8000mmk</p>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary btn-sm">Order Now</button>
                                </div>
                            </div>
                            <img src="./assets/img/products/cocktail2.jpg" class="menu-images" alt="">
                        </div>
                        <div class="img-boxes drinks">
                            <div class="prices">
                                <p>Redberry Wisk</p>
                                <p>9000mmk</p>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary btn-sm">Order Now</button>
                                </div>
                            </div>
                            <img src="./assets/img/products/cocktail3.jpg" class="menu-images" alt="">
                        </div>
                        <div class="img-boxes drinks">
                            <div class="prices">
                                <p>Lemon Soda</p>
                                <p>7000mmk</p>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary btn-sm">Order Now</button>
                                </div>
                            </div>
                            <img src="./assets/img/products/cocktail4.jpg" class="menu-images" alt="">
                        </div>
                        <div class="img-boxes drinks">
                            <div class="prices">
                                <p>Kamikano White</p>
                                <p>10000mmk</p>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary btn-sm">Order Now</button>
                                </div>
                            </div>
                            <img src="./assets/img/products/cocktail5.jpg" class="menu-images" alt="">
                        </div>
                        <div class="img-boxes boba">
                            <div class="prices">
                                <p>Strawberry Smoothie</p>
                                <p>4000mmk</p>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary btn-sm">Order Now</button>
                                </div>
                            </div>
                            <img src="./assets/img/products/smoothie1.jpg" class="menu-images" alt="">
                        </div>
                        <div class="img-boxes boba">
                            <div class="prices">
                                <p>Strawberry Milk Shake</p>
                                <p>5000mmk</p>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary btn-sm">Order Now</button>
                                </div>
                            </div>
                            <img src="./assets/img/products/smoothie2.jpg" class="menu-images" alt="">
                        </div>
                        <div class="img-boxes cake">
                            <div class="prices">
                                <p>Cheese Cake</p>
                                <p>10000mmk</p>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary btn-sm">Order Now</button>
                                </div>
                            </div>
                            <img src="./assets/img/products/cake1.jpg" class="menu-images" alt="">
                        </div>
                        <div class="img-boxes cake">
                            <div class="prices">
                                <p>Moose Cheese Cake</p>
                                <p>10000mmk</p>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary btn-sm">Order Now</button>
                                </div>
                            </div>
                            <img src="./assets/img/products/cake2.jpg" class="menu-images" alt="">
                        </div>
                        <div class="img-boxes cake">
                            <div class="prices">
                                <p>Moose Choco Cake</p>
                                <p>4000mmk</p>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary btn-sm">Order Now</button>
                                </div>
                            </div>
                            <img src="./assets/img/products/cake3.jpg" class="menu-images" alt="">
                        </div>
                        <div class="img-boxes coffee show">
                            <div class="prices">
                                <p>Latte</p>
                                <p>2500mmk</p>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary btn-sm">Order Now</button>
                                </div>
                            </div>
                            <img src="./assets/img/products/coffee1.jpg" class="menu-images" alt="">
                        </div>
                        <div class="img-boxes coffee show">
                            <div class="prices">
                                <p>Cuppachino</p>
                                <p>2500mmk</p>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary btn-sm">Order Now</button>
                                </div>
                            </div>
                            <img src="./assets/img/products/coffee2.jpg" class="menu-images" alt="">
                        </div>
                        <div class="img-boxes coffee show">
                            <div class="prices">
                                <p>Ice Coffee</p>
                                <p>3000mmk</p>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary btn-sm">Order Now</button>
                                </div>
                            </div>
                            <img src="./assets/img/products/coffee3.jpg" class="menu-images" alt="">
                        </div>
                        <div class="img-boxes coffee show">
                            <div class="prices">
                                <p>Ice Latte</p>
                                <p>3000mmk</p>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary btn-sm">Order Now</button>
                                </div>
                            </div>
                            <img src="./assets/img/products/coffee4.jpg" class="menu-images" alt="">
                        </div>
                        <div class="img-boxes signature">
                            <div class="prices">
                                <p>Chocolate Pudding</p>
                                <p>4000mmk</p>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary btn-sm">Order Now</button>
                                </div>
                            </div>
                            <img src="./assets/img/products/pudding1.jpg" class="menu-images" alt="">
                        </div>
                        <div class="img-boxes signature">
                            <div class="prices">
                                <p>Bubble Waffle</p>
                                <p>4000mmk</p>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary btn-sm">Order Now</button>
                                </div>
                            </div>
                            <img src="./assets/img/products/waffle.jpg" class="menu-images" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End Menu Section -->

        <!-- Start Gift Card -->
        <section id="giftcard" class="py-5">
            <div class="container-fluid">
                <!-- start title  -->
                <div class="row">
                    <div class="col-md-12 text-center titleboxes">
                        <h3 class="mb-3 fw-bold titles">Gift Cards & Discounts</h3>
                        <p>Order your item. We'll deliver your coffee or cake to your love with love letter or gift card. Leave a message that you want to be written in the gift card. <br/>
                            Enjoy our coffee with love.
                        </p>
                    </div>
                </div>
                <!-- end title  -->
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6 col-sm-12 px-5 py-3 gifts">
                        <div class="giftforms">
                            <form action="" method="">
                                <h3 class="text-center">Fill your gift quotes.</h3>
                                <div class="form-group">
                                    <label for="from">From:</label>
                                    <input type="text" name="from" id="from" class="form-control"/>
                                </div>
    
                                <div class="form-group">
                                    <label for="to">To:</label>
                                    <input type="text" name="to" id="to" class="form-control"/>
                                </div>
    
                                <div class="form-group">
                                    <label for="letter">Gift Letter:</label>
                                    <textarea name="letter" id="letter" class="form-control" rows="5"></textarea>
                                </div>         
                                
                                <div class="d-grid my-4 letterbtns">
                                    <button type="submit" class="btn text-muted fw-bold mb-3">Send <i class="fas fa-heart"></i></button>
                                    <button type="button" class="btn text-muted fw-bold">Cancel <i class="fas fa-heart-crack"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="letterboxes">
                            <!-- <img src="https://www.careeraddict.com/uploads/article/58744/illustration-man-woman-design-large-computer-screen.jpg" class="" alt=""> -->

                            <div class="heart-container">
                                <div class="hearts"><i class="fas fa-heart fa-2x"></i></div>
                                <div class="hearts"><i class="fas fa-heart fa-3x"></i></div>
                                <div class="hearts"><i class="fas fa-heart fa-4x"></i></div>
                                <div class="hearts"><i class="fas fa-heart fa-2x"></i></div>
                                <div class="hearts"><i class="fas fa-heart fa-3x"></i></div>
                                <div class="hearts"><i class="fas fa-heart fa-1x"></i></div>
                                <div class="hearts"><i class="fas fa-heart fa-5x"></i></div>
                                <div class="hearts"><i class="fas fa-heart fa-6x"></i></div>
                                <div class="hearts"><i class="fas fa-heart fa-4x"></i></div>
                                <div class="hearts"><i class="fas fa-heart fa-2x"></i></div>
                                <div class="hearts"><i class="fas fa-heart fa-3x"></i></div>
                                <div class="hearts"><i class="fas fa-heart fa-3x"></i></div>
                                <div class="hearts"><i class="fas fa-heart fa-5x"></i></div>
                                <div class="hearts"><i class="fas fa-heart fa-2x"></i></div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Gift Card  -->

        <!-- Start Trending Section -->
        <section id="trendings" class="py-5">
            <div class="container d-flex justify-content-center align-items-center flex-col">
                <div class="row">
                    <div class="col-md-12">
                        <h5>Our Recommendation For Summer</h5>
                    </div>
                </div>
                <div class="trending-container">
                    <div class="trending-menus">
                        <img src="./assets/img/products/cocktail5.jpg" width="200" height="200" class="rounded-circle" alt="cocktail">
                        <span class="trending-ratings"><i class="fas fa-star stars"></i>4.5</span>
                        <button type="button" class="rounded-pill cart1"><i class="fas fa-shopping-cart"></i> Add to cart</button>
                    </div>

                    <div class="trending-menus">
                        <img src="./assets/img/products/cocktail4.jpg" width="200" height="200" class="rounded-circle" alt="cocktail">
                        <span class="trending-ratings"><i class="fas fa-star stars"></i>4.0</span>
                        <button type="button" class="rounded-pill cart1"><i class="fas fa-shopping-cart"></i> Add to cart</button>
                    </div>

                    <div class="trending-menus">
                        <img src="./assets/img/products/cocktail3.jpg" width="200" height="200" class="rounded-circle" alt="cocktail">
                        <span class="trending-ratings"><i class="fas fa-star stars"></i>4.8</span>
                        <button type="button" class="rounded-pill cart1"><i class="fas fa-shopping-cart"></i> Add to cart</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Tresding Section -->

        <!-- Start Decorations -->
        <section id="decorations" class="decorations py-5">
            <div class="container decorations-box">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Decorations</h3>
                        <p class="text-center">We have beautiful decoration that's good to take a photograph.</p>
                    </div>
                    <div class="col-md-12 my-5">
                        <div class="decorations-container">
                            <img src="./assets/img/decoration/inseide1.jpg" width="300" alt="decoration">
                            <img src="./assets/img/decoration/bar1.jpg" width="300" alt="decoration">
                            <img src="./assets/img/decoration/inseide2.jpg" width="300" alt="decoration">
                            <img src="./assets/img/decoration/inside2.jpg" width="300" alt="decoration">
                            <img src="./assets/img/decoration/outside1.jpg" width="300" alt="decoration">
                            <img src="./assets/img/decoration/romance.jpg" width="300" alt="decoration">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Decorations -->

        <!-- Start Staff Section -->
        <section id="staff" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="staff-container">
                            <div class="staff-cards">
                                <img src="./assets/img/image/img/users/user1.jpg" class="staffimgs" alt="user1">
                                <div class="text-center my-4">
                                    <h5 class="mb-3 fw-bold">Ei Thet Mon</h5>
                                    <p class="small">Founder</p>
                                    <p class="small">Executive Chief At The Wallace Hotel San Francisco</p>
                                    <div class="social-icons mb-5">
                                        <a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a>
                                        <a href="javascript:void(0);"><i class="fab fa-instagram"></i></a>
                                        <a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
                                        <a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
    
                                    <button type="button" class="contact-btns text-uppercase">Contact</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="staff-container">
                            <div class="staff-cards">
                                <img src="./assets/img/image/img/users/user2.jpg" class="staffimgs" alt="user2">
                                <div class="text-center my-4">
                                    <h5 class="mb-3 fw-bold">John Snow</h5>
                                    <p class="small">Co Founder</p>
                                    <p class="small">Grand Champion At <br/> Mastaer Chief 2019 USA</p>
                                    <div class="social-icons mb-5">
                                        <a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a>
                                        <a href="javascript:void(0);"><i class="fab fa-instagram"></i></a>
                                        <a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
                                        <a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
    
                                    <button type="button" class="contact-btns text-uppercase">Contact</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="staff-container">
                            <div class="staff-cards">
                                <img src="./assets/img/image/img/users/user3.jpg" class="staffimgs" alt="user3">
                                <div class="text-center my-4">
                                    <h5 class="mb-3 fw-bold">July</h5>
                                    <p class="small">Manager</p>
                                    <p class="small">Grand Finalist At <br/> Master Chief 2020 UK </p>
                                    <div class="social-icons mb-5">
                                        <a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a>
                                        <a href="javascript:void(0);"><i class="fab fa-instagram"></i></a>
                                        <a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
                                        <a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
    
                                    <button type="button" class="contact-btns text-uppercase">Contact</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Staff Section  -->

        <!-- Start Rate us Section -->
        <section id="rateuss" class="py-5">
            <div class="container">
                <!-- start title -->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center text-muted">Customers Rating</h3>
                </div>
            </div>
            <!-- end title -->
            <div class="row">
                <div class="col-md-5">
                    <div id="rate-location" style="width: 400px; height: 500px;"></div>
                </div>
                <div class="col-md-7">
                    <h4 class="text-center lead">Rate Us</h4>

                    <div class="mt-5">
                        <div class="mb-4 rated-customers">
                            <p class="rated-starcounts"><span>5</span> <i class="fas fa-star text-warning"></i></p>
                            <div class="progress progresses">
                                <div class="progress-bar bg-success" style="width:70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                            </div>
                        </div>

                        <div class="mb-4 rated-customers">
                            <p class="rated-starcounts"><span>4</span> <i class="fas fa-star text-warning"></i></p>
                            <div class="progress progresses">
                                <div class="progress-bar bg-info" style="width:85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                            </div>
                        </div>

                        <div class="mb-4 rated-customers">
                            <p class="rated-starcounts"><span>3</span> <i class="fas fa-star text-warning"></i></p>
                            <div class="progress progresses">
                                <div class="progress-bar bg-secondary" style="width:50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                            </div>
                        </div>

                        <div class="mb-4 rated-customers">
                            <p class="rated-starcounts"><span>2</span> <i class="fas fa-star text-warning"></i></p>
                            <div class="progress progresses">
                                <div class="progress-bar bg-warning" style="width:60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                            </div>
                        </div>

                        <div class="mb-4 rated-customers">
                            <p class="rated-starcounts"><span>1</span> <i class="fas fa-star text-warning"></i></p>
                            <div class="progress progresses">
                                <div class="progress-bar bg-danger" style="width:20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn rate-btn text-muted">Rate Us</button>

                    <div class="modal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="text-center">Rate Us</h3>
                                </div>
                                <div class="modal-content">
                                    <div class="text-center">
                                        <a href="javascript:void(0);"><i class="fas fa-star rating-stars"></i></a>
                                        <a href="javascript:void(0);"><i class="fas fa-star rating-stars"></i></a>
                                        <a href="javascript:void(0);"><i class="fas fa-star rating-stars"></i></a>
                                        <a href="javascript:void(0);"><i class="fas fa-star rating-stars"></i></a>
                                        <a href="javascript:void(0);"><i class="fas fa-star rating-stars"></i></a>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger later-btn me-3">Later</button>
                                    <button type="submit" class="btn btn-primary">Rate Us</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            </div>
        </section>
        <!-- End Rate us Section  -->

        <!-- start footer section -->
        <footer class="bg-dark text-white py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h6 class="fw-bold mb-3">Information</h6>
                        <ul class="list-unstyled">
                            <li><a href="javascript:void(0);" class="footer-links">Home</a></li>
                            <li><a href="javascript:void(0);" class="footer-links">Short Code</a></li>
                            <li><a href="javascript:void(0);" class="footer-links">About</a></li>
                            <li><a href="javascript:void(0);" class="footer-links">Contact</a></li>
                            <li><a href="javascript:void(0);" class="footer-links">News</a></li>
                            <li><a href="javascript:void(0);" class="footer-links">New Menu</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <h6 class="fw-bold mb-3">Delivery Help</h6>
                        <ul class="list-unstyled">
                            <li><a href="javascript:void(0);" class="footer-links">FAQ</a></li>
                            <li><a href="javascript:void(0);" class="footer-links">Search Dessart</a></li>
                            <li><a href="javascript:void(0);" class="footer-links">Latest</a></li>
                            <li><a href="javascript:void(0);" class="footer-links">Special</a></li>
                        </ul>

                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="javascript:void(0);" class="footer-icons"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0);" class="footer-icons"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0);" class="footer-icons"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0);" class="footer-icons"><i class="fas fa-envelope"></i></a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <h6 class="fw-bold mb-3">Insta</h6>
                        <div>
                            <img src="./assets/img/insta/insta1.jpg" width="70" alt="">
                            <img src="./assets/img/insta/insta2.jpg" width="70" alt="">
                            <img src="./assets/img/insta/insta3.jpg" width="70" alt="">
                        </div>

                        <div>
                            <img src="./assets/img/insta/insta4.jpg" width="70" alt="">
                            <img src="./assets/img/insta/insta5.jpg" width="70" alt="">
                            <img src="./assets/img/insta/insta6.avif" width="70" alt="">
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <h6 class="fw-bold mb-3">Payments</h6>
                        <ul class="list-unstyled">
                            <li><a href="javascript:void(0);" class="footer-links">Online Payments</a>
                                <ul class="list-unstyled">
                                    <li class="ms-3"><i class="fas fa-arrow-right fa-sm me-3"></i><a href="javascript:void(0);" class="footer-links">AYA</a></li>
                                    <li class="ms-3"><i class="fas fa-arrow-right fa-sm me-3"></i><a href="javascript:void(0);" class="footer-links">KBZ</a></li>
                                    <li class="ms-3"><i class="fas fa-arrow-right fa-sm me-3"></i><a href="javascript:void(0);" class="footer-links">Wave</a></li>
                                    <li class="ms-3"><i class="fas fa-arrow-right fa-sm me-3"></i><a href="javascript:void(0);" class="footer-links">CB pay</a></li>
                                </ul>
                            </li>
                            <li>Cash</li>
                            <li>Credit Cards</li>
                        </ul>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="javascript:void(0);"><img src="./assets/img/payment/card.png" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0);"><img src="./assets/img/payment/descoverycard.png" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0);"><img src="./assets/img/payment/mastercard.png" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0);"><img src="./assets/img/payment/visacard.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>

                <hr/>

                <p class="text-center">Copyright &copy; <span id="getyear"></span> All right reserved. Developed by <a href="mailto:dhoon166@gmail.com">DhoonGyi</a> <i class="fas fa-heart text-danger"></i></p>
            </div>
        </footer>
        <!-- end footer section  -->

        
        

        <!-- bootstrap -->
        <script src="./assets/libs/bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- jquery -->
        <script src="./assets/libs/jquery/jquery-3.7.0.min.js" type="text/javascript"></script>
        <!-- google chart -->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <!-- custom js -->
        <script src="./js/app.js" type="text/javascript"></script>
    </body>
</html>
