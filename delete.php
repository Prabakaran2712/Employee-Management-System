<?php
$id=$_GET['id'];
include "config.php";
$sql="delete from employees where EmpID=$id";
$result=mysqli_query($conn,$sql);
if($result){
    header('Location:Home.php');
}
else{
    echo "Error in deleting";
}
