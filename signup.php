<?php include 'includes/common.php'; 
      if(isset($_SESSION['email'])){
       header('location: products.php'); 
   }  
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SignUp</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <br> <br> <br>
        <form action='signup_script.php' method='POST'>
            <div class="container">
                <div class="row row-style">
                    <div class="col-xs-6 col-xs-offset-3">
                        <h3><b>SIGN UP</b></h3>
                      <div class="form-group">
                          <input type="text" name="name" placeholder="Name" class="form-control" required >
                      </div>
                      <div class="form-group">
                          <input type="email" name="email" placeholder="Email" class="form-control" required>
                      </div>
                      <div class="form-group">
                          <input type="password" name="Pass" placeholder="Password" class="form-control" pattern=".{6,}" required>
                         
                      </div>
                      <div class="form-group">
                          <input type="tel" name="contact" placeholder="Contact" class="form-control" pattern="[1-9]{10}" required>
                           
                      </div>
                      <div class="form-group">
                          <input type="text" name="city" placeholder="City" class="form-control" required>
                      </div>
                      <div class="form-group">
                          <input type="text" name="address" placeholder="Address" class="form-control" required>
                      </div>
                       <input type="submit" class="btn btn-primary btn-lg active" value="Submit" name="submit">
                    </div>
                </div>
            </div>    
        </form>
        <?php include 'includes/footer.php'; ?>  
    </body>
</html>
