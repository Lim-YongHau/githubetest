<?php
session_start();

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'ntd_db');

$name = $_POST['user'];
$pass = $_POST['password'];
// $email = $_POST['Email'];
// $address = $_POST['Address'];
// $phone = $_POST['Phone'];

$s = " select * from usertable where name = '$name' && password = '$pass'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);


if($num == 1){
    $_SESSION['userName'] = $name;
    $_SESSION['userPassword'] = $pass;
    // $_SESSION['userEmail'] = $email;
    // $_SESSION['userAddress'] = $address;
    // $_SESSION['userPhone'] = $phone;
    header('location:home.php');
    
 }else{
     header('location:login.php');
   
     

 }

 
    


 ?>