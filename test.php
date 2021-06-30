<?php
$servername="localhost";
$username="root";
$password="";
$dbname="userdb";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("connection failed".mysqli_connect_error());
}
$sql="insert into admin(name,password,email) values('praba','praba','praba@mail.com')";
if(mysqli_query($conn,$sql)){
    echo "row added";
}
else{
    echo "error".mysqli_error($conn);
}


?>