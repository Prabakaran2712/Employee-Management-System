<?php
include "config.php";
$un=$_POST['username'];
$pwd=$_POST['password'];
$email=$_POST['email'];
$sql="insert into admin(name,password,email) values('$un','$pwd','$email')";
$result=mysqli_query($conn,$sql);
if($result){
    header("location:login.php");
}