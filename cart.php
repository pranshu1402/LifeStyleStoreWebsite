<?php include 'includes/common.php';
      if(!isset($_SESSION['email'])){
       header('location: index.php'); 
      } 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Place Order</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <?php include 'includes/header.php';  ?>
        <br><br><br><br>
        <?php 
           $userid = $_SESSION['user_id'];
           $cart_sel = "SELECT item_id,i.name,i.price FROM users_item ui 
                        INNER JOIN items i ON ui.item_id = i.PID
                        INNER JOIN users u ON ui.user_id = u.uid
                        WHERE ui.user_id = '$userid' AND ui.status='Added to cart'"; 
           $cart_query_result = mysqli_query($con, $cart_sel) or die(mysqli_error($con));
           $i =mysqli_num_rows($cart_query_result);
           if($i==0){
            echo 'Add items to the cart first!';
            echo '<br/>';
            echo '<a href="products.php" class="btn btn-default">click here to select products</a>';
           }else{
           ?>
        <div class="container">
          <div class="table-responsive"> 
            <table class="table table-striped table-bordered">
                <tbody>
                <tr> <th>Item Number</th><th>Item Name</th><th>Item Price</th><th> Edit/Confirm </th></tr>
                <?php $x=1;
                      $Id=0;
                      $sum=0;
                   while($x<$i){
                       $row = mysqli_fetch_row($cart_query_result);
                       $sum += $row[2];
                       if($Id==0){
                           $Id =$row[0].',';
                       }else{
                           $Id =$Id.$row[0].',';
                       }
                ?>
                <tr> <td><br><?php echo $x; ?></td><td><br> <?php echo $row[1];?></td><td><br><?php echo $row[2];?></td><td><br><a href="cart_remove.php?id=<?php echo $row[0];?>" class="btn btn-primary" >   Remove</a></td> </tr>
                <?php  $x++;
                     } 
                     if($x==$i){
                      $row = mysqli_fetch_row($cart_query_result);
                      $sum += $row[2];
                      $Id =$Id.$row[0]; 
                ?>
                <tr> <td><br><?php echo $x; ?></td><td><br> <?php echo $row[1];?></td><td><br><?php echo $row[2];?></td><td><br><a href="cart_remove.php?id=<?php echo $row[0];?>" class="btn btn-primary" >   Remove</a></td> </tr>   
                <?php     
                     }
                ?>
                <tr> <td></td><td> Total</td><td> Rs. <?php echo $sum; ?>/-</td><td><a href="success.php?id=<?php echo $Id;?>" class="btn btn-primary">Confirm Order</a></td></tr>
            <?php 
             } 
            ?>
                </tbody>
            </table>
          </div>    
        </div>
        
        <?php include 'includes/footer.php'; ?> 
    </body>
</html>
