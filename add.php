<?php
$eno=$_POST['eno'];
$name=$_POST['name'];
$dept=$_POST['dept'];
$salary=$_POST['salary'];
include "config.php";
$sql="insert into employees(EmpID,Name,Department,Salary) values($eno,'$name','$dept',$salary)";
$result=mysqli_query($conn,$sql);
if($result){
    header('Location:Home.php');
}
else{
    echo '<script>
    alert("Employee Id already exist");
    window.location.href="Home.php";
    </script>';

}