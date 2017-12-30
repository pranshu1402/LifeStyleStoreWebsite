<?php 
    include 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Products</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style>
            .img_style{
                max-height:150px;
            }
         </style>   
    </head>
    <body>
        
        <?php include 'includes/header.php'; 
              ?>
        <br><br><br>
        <?php
        include 'includes/check_if_added.php';
        ?>
        <div class="container">
            <div class="jumbotron jumbotron-style">
                <h2>Welcome to our Lifestyle Store!</h2><br>
                <p>We have the best cameras,shirts and watches for you.No need to hunt around,we have all in one place.</p>
            </div>
            
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/camera.jpg" alt="cameras" class="img_style img-thumbnail">
                        <div class="caption">
                            <h3>Cannon DSLR</h3>
                            <p>Price: Rs. 36,000</p>
                        </div>
                        <?php if (!isset($_SESSION['email'])){ 
                         ?>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        <?php }else{
                                 if (check_if_added_to_cart($con,1)){ 
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                 }else{ ?>
                                 <a href="cart_add.php?id=1" name="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php }
                                } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/camera.jpg" alt="cameras" class="img-thumbnail img_style">
                        <div class="caption">
                            <h3>NIKON DSLR</h3>
                            <p>Price: Rs. 40,000</p>
                        </div>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php }else{
                                 if (check_if_added_to_cart($con,2)) { 
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                 }else{ ?>
                                 <a href="cart_add.php?id=2" name="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php }
                                } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/camera.jpg" alt="cameras" class="img-thumbnail img_style">
                        <div class="caption">
                            <h3>SONY DSLR</h3>
                            <p>Price: Rs. 45,000</p>
                        </div>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php }else{
                                 if (check_if_added_to_cart($con,3)) { 
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                 }else{ ?>
                                 <a href="cart_add.php?id=3" name="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php }
                                } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/camera.jpg" alt="cameras" class="img-thumbnail img_style">
                        <div class="caption">
                            <h3>OLYMPUS DSLR</h3>
                            <p>Price: Rs. 50,000</p>
                        </div>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php }else{
                                 if (check_if_added_to_cart($con,4)) { 
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                 }else{ ?>
                                 <a href="cart_add.php?id=4" name="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php }
                                } ?>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img class="img-thumbnail img_style" src="images/watch.jpg" alt="shirts">
                        <div class="caption">
                            <h3>Titan Model #301</h3>
                            <p>Price: Rs. 15,000</p>
                        </div>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php }else{
                                 if (check_if_added_to_cart($con,5)) { 
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                 }else{ ?>
                                 <a href="cart_add.php?id=5" name="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php }
                                } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img class="img-thumbnail img_style" src="images/titan.jpg" alt="shirts">
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>Price: Rs. 3,000</p>
                        </div>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php }else{
                                 if (check_if_added_to_cart($con,6)) { 
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                 }else{ ?>
                                 <a href="cart_add.php?id=6" name="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php }
                                } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img class="img-thumbnail img_style" src="images/hmtwatch.jpg" alt="shirts">
                        <div class="caption">
                            <h3>HMT MILAN</h3>
                            <p>Price: Rs. 8,000</p>
                        </div>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php }else{
                                 if (check_if_added_to_cart($con,7)) { 
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                 }else{ ?>
                                 <a href="cart_add.php?id=7" name="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php }
                                } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img class="img-thumbnail img_style" src="images/fabreluba.jpg" alt="shirts">
                        <div class="caption">
                            <h3>FAVER LEUBA #111</h3>
                            <p>Price: Rs. 13,000</p>
                        </div>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php }else{
                                 if (check_if_added_to_cart($con,8)) { 
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                 }else{ ?>
                                 <a href="cart_add.php?id=8" name="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php }
                                } ?>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img class="img-thumbnail img_style" src="images/shirt.jpg" alt="shirts">
                        <div class="caption">
                            <h3>H&AMP;W </h3>
                            <p>Price: Rs. 800</p>
                        </div>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php }else{
                                 if (check_if_added_to_cart($con,9)) { 
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                 }else{ ?>
                                 <a href="cart_add.php?id=9" name="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php }
                                } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img class="img-thumbnail img_style" src="images/shirt.jpg" alt="shirts">
                        <div class="caption">
                            <h3>Louise Phillipe</h3>
                            <p>Price: Rs. 1,000</p>
                        </div>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php }else{
                                 if (check_if_added_to_cart($con,10)) { 
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                 }else{ ?>
                                 <a href="cart_add.php?id=10" name="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php }
                                } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img class="img-thumbnail img_style" src="images/shirt.jpg" alt="shirts">
                        <div class="caption">
                            <h3>JOHN ZOK</h3>
                            <p>Price: Rs. 1,500</p>
                        </div>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php }else{
                                 if (check_if_added_to_cart($con,11)) { 
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                 }else{ ?>
                                 <a href="cart_add.php?id=11" name="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php }
                                } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img class="img-thumbnail img_style" src="images/shirt.jpg" alt="shirts">
                        <div class="caption">
                            <h3>JHALSANI</h3>
                            <p>Price: Rs. 1,300</p>
                        </div>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php }else{
                                 if (check_if_added_to_cart($con,12)) { 
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                 }else{ ?>
                                 <a href="cart_add.php?id=12" name="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php }
                                } ?>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <?php         
        include 'includes/footer.php';
        ?>
    </body>
</html>
