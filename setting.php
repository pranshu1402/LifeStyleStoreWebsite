 <?php include 'includes/common.php';
       if(!isset($_SESSION['email'])){
       header('location: index.php'); 
      }
 ?>   
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Settings</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
         <?php include 'includes/header.php'; ?>   
        <br><br><br>
         <?php 
            if (isset($_GET['mess'])&& $_GET['mess']==0){
              echo '   Sorry Try Again!..the new password and the retyped password must be same';
            }else if(isset($_GET['mess'])&& $_GET['mess']==1){
              echo '   Sorry Try Again!..password incorrect!';
            }
         ?>
        <form action="setting_script.php" method="POST">
          <div class="container">
            <div class="row row-style">
                <div class="col-xs-6 col-xs-offset-3">
                    <h3><b>Change Password</b></h3>
                    <div class="form-group">
                       <input type="password" name="old_password" class="form-control" placeholder="Old Password">
                    </div>
                    <div class="form-group">
                       <input type="password" name="new_password" class="form-control" placeholder="New Password">
                    </div>
                    <div class="form-group">
                       <input type="password" name="new_2_password" class="form-control" placeholder="Re-type new Password">
                    </div>
                    <input type="submit" name="Changebtn" class="btn btn-primary" value="Change">
                </div>   
            </div>
          </div>    
        </form> 
        
        <?php include 'includes/footer.php'; ?>   
    </body>
</html>
