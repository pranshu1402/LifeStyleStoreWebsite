<?php
  require 'includes/common.php';
  $item_id = $_GET['id'];
  $usrid = $_SESSION['user_id'];
  $insert_q = "INSERT INTO users_item(user_id, item_id, status) VALUES('$usrid', '$item_id', 'Added to cart')";
  $insert_q_res= mysqli_query($con, $insert_q) or die(mysqli_error($con));
  header('location:products.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

