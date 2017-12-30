<?php include 'includes/common.php';
      
      if(isset($_SESSION['email'])){
       header('location: products.php');
      }  
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <?php include 'includes/header.php'; 
        ?>   
        <br><br><br>
         <?php 
            if (isset($_GET['message'])&& $_GET['message']==-1){
              echo '   Sorry!.. No such entry found..Please register with us Again or try login using another id';
            }else if(isset($_GET['message'])&& $_GET['message']==0){
              echo '   Sorry Try Again!..password incorrect!';
            }
         ?>
        <div class="container">
           <div class="row row-style">
               <div class="col-xs-6 col-xs-offset-3">
                   <div class="panel panel-primary">
                       <div class="panel-heading text-warning">
                           <h4>Login</h4>
                       </div>
                       <div class="panel-body">
                           <form action="login_submit.php" method='POST'>
                               <div class="form-group">
                                   <label><input type="email" placeholder="Email" name="Email" class="form-control"></label>
                               </div>
                               <div class="form-group">
                                   <label><input type="password" placeholder="Password" name="Password" class="form-control"></label>
                               </div>
                            <input type='submit' class='btn btn-primary' name='login' value='Login'> 
                        </form>
                       </div>
                       <div class="panel-footer">
                           <p>Don't have an account? <a href="signup.php" class="active">Register</a></p>
                       </div>
                   </div>
               </div>     
           </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>
