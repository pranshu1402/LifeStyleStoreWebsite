<?php
  include 'includes/common.php';
  
  $phone = $_POST['contact'];
  $pass = mysqli_real_escape_string($con,$_POST['Pass']);
  $salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
  $saltedPW =  $pass.$salt;
  $hashedPW = hash('sha256', $saltedPW);
  
  $name =  mysqli_real_escape_string($con,$_POST['name']);
  $email =  mysqli_real_escape_string($con,$_POST['email']);
  $city = mysqli_real_escape_string($con,$_POST['city']);
  $addr =  mysqli_real_escape_string($con,$_POST['address']);
  $sel_query = "SELECT uid FROM users WHERE email='$email'";
  $sel_query_res = mysqli_query($con, $sel_query) or die(mysqli_error($con)) ;
  if(mysqli_num_rows($sel_query_res)>0){
      echo 'Email-id Already exists ..please make a new one or Login using this Id';
  }
  else{
     $ins_query = "INSERT INTO users(name,email,password,salt,phone,city,address) VALUES('$name','$email','$hashedPW','$salt','$phone','$city','$addr')"; 
     $ins_query_res = mysqli_query($con, $ins_query) or die(mysqli_error($con));
     $_SESSION['email']=$email;
     $_SESSION['user_id'] = mysqli_insert_id($con) or die(mysqli_error($con));
//     echo $hashedPW;
//     die();
     header('location: products.php');
  }