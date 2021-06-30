<?php
$eno=$_POST['eno'];
$name=$_POST['name'];
$dept=$_POST['dept'];
$salary=$_POST['salary'];
include "config.php";
$sql="Update  employees set Name='$name',Department='$dept',Salary=$salary where EmpID=$eno";
$result=mysqli_query($conn,$sql);
if($result){
    header('Location:Home.php');
}
else{
    echo '<script>
    alert("Employee doesnot exist");
    window.location.href="update.php";
    </script>';

}