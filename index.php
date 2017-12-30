<?php 
   require 'includes/common.php';
   if (isset($_SESSION['email'])){
    header('location: products.php'); 
   }      
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <br><br>
        <div id="banner-image">
            <div class="container inner-banner-image">
                <center> 
                <div id="banner-content">
                    <a href="login.php" class="btn btn-danger btn-lg active">Shop now</a>
                </div>
                </center>    
            </div>  
        </div>
        <?php
         include 'includes/footer.php';
        ?>
    </body>
</html>
