<?php
   include 'includes/common.php';
   $id = $_GET['id'];
   $u_id = $_SESSION['user_id'];
   echo $id;
   $del_query = "DELETE FROM users_item WHERE user_id='$u_id' AND item_id='$id' AND status='Added to cart'";
   $del_query_res = mysqli_query($con, $del_query) or die(mysqli_error($con));
   if(mysqli_affected_rows($con)){
    header('location:cart.php');
   }else{
       echo "Error : cant perform the required operation";       
   }

