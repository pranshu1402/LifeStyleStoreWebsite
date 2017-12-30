<?php
   function check_if_added_to_cart($con,$item_id){
      $uid = $_SESSION['user_id'];
      $select_query = "SELECT * FROM users_item WHERE item_id='$item_id' AND user_id ='$uid' AND status='Added to cart'"; 
      $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
      if(mysqli_num_rows($select_query_result)==0){
          return 0;
      }else{
          return 1;
      }
  }

