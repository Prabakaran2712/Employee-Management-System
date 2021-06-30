<?php
session_start();
include "config.php";
$un=$_POST['username'];
$pwd=$_POST['password'];
$sql="select * from admin where name='$un' and password='$pwd'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if($count>0){
    $_SESSION['username']=$un;
    header("location:home.php");

}
else{
    echo '<script>
    alert("Incorrect Username or Password");
    window.location.href="login.php";
    </script>';
}