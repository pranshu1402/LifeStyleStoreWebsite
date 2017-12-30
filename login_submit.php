<?php
 include 'includes/common.php';
 $email = mysqli_real_escape_string($con,$_POST['Email']);
 $password = mysqli_real_escape_string($con,$_POST['Password']);
 $user_auth_query = "SELECT salt FROM users WHERE email='$email'";
 $user_auth_res = mysqli_query($con, $user_auth_query) or die(mysqli_error($con));
 if(mysqli_num_rows($user_auth_res)==0){
     session_destroy();
     sleep(2);
     header('location: login.php?message=-1');
 }else{
    $row= mysqli_fetch_assoc($user_auth_res);
    $Salt = $row['salt'];
    echo $Salt.'<br/>';
    $SaltedPW =  $password.$Salt;
    $HashedPW = hash('sha256', $SaltedPW);
    $user_auth_Query = "SELECT uid FROM users WHERE email='$email' AND password='$HashedPW'";
    $user_auth_result = mysqli_query($con, $user_auth_Query) or die(mysqli_error($con));
    if(mysqli_num_rows($user_auth_result)==0){
    session_destroy();
    sleep(2);
     header('location: login.php?message=0');   
    }else{
     $row2 = mysqli_fetch_assoc($user_auth_result);
     $_SESSION['user_id'] = $row2['uid'];
     $_SESSION['email'] = $email;   
     header('location: products.php');
    }
 }