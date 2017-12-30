 <?php include 'includes/common.php';
       if(!isset($_SESSION['email'])){
       header('location: index.php'); 
      }
 ?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Success</title>
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
           <br><br><br><br>
           <?php
           $item_id= $_GET['id'];
           $item_arr = explode(',',$item_id);
           $use_id = $_SESSION['user_id'];
           foreach($item_arr as $item_id){
           $upd_query = "UPDATE users_item SET status='Confirmed' WHERE user_id ='$use_id' AND item_id ='$item_id'";
           $upd_query_res = mysqli_query($con, $upd_query) or die(mysqli_error($con));
           }
           ?>
           <div class="container">
             <p class="text-success">Your order is confirmed. Thank you for shopping
                with us. <a href="products.php" class="alert-link">Click here</a> to purchase any other item.</p>  
           </div>
        
           <?php include 'includes/footer.php'; ?> 
    </body>
</html>
