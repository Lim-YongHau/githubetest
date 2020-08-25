<?php
session_start();
header('location:login.php');

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'ntd_db');

$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];

$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Username Already Taken";
}else{
    $reg= " insert into usertable(name , password , email , address , phone) values ('$name' , '$pass' , '$email' , '$address' , '$phone')";
    mysqli_query($con, $reg);
    echo "<script>alert('Registration Successful')</script>";
   
}
?>