<?php
 include 'includes/common.php';
 if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
$opass= mysqli_real_escape_string($con,$_POST['old_password']);
$npass= mysqli_real_escape_string($con,$_POST['new_password']);
$rnpass= mysqli_real_escape_string($con,$_POST['new_2_password']);
if($npass!=$rnpass){
    header('location:setting.php?mess=0');
}
$emal = $_SESSION['email'];
$s_query = "SELECT salt FROM users WHERE email='$emal' " ;
$s_query_res = mysqli_query($con, $s_query) or die(mysqli_error($con));
$row3 = mysqli_fetch_assoc($s_query_res);
$salt1 = $row3['salt'];
$saltedopass = $opass.$salt1;
$hashedopass = hash('sha256', $saltedopass);
$auth_query = "SELECT uid FROM users WHERE email='$emal' AND password='$hashedopass' " ;
$auth_query_res = mysqli_query($con, $auth_query) or die(mysqli_error($con));
if(mysqli_num_rows($auth_query_res)==0){
//    echo $salt1.'<br/>';
//    echo $hashedopass;
//    die();
    header('location:setting.php?mess=1');
}else{
    $salt2 = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
    $saltedPW2 =  $npass.$salt2;
    $hashedPW2 = hash('sha256', $saltedPW2);
//    echo $salt2.'<br/>';
//    echo $hashedPW2;
//    die();
    $up_query="UPDATE users SET password='$hashedPW2',salt='$salt2' WHERE email='$emal' ";
    $up_query_res = mysqli_query($con, $up_query) or die(mysqli_error($con));
    session_unset();
    session_destroy();
    echo 'SUCCESSFULLY UPDATED YOUR PASSWORD ..Please close this tab and login again with new password or';
    echo '<a href="index.php">click here to go to home</a>';
}
