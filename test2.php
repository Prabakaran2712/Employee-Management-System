<?php
include "config.php";
$sql="insert into employees(EmpID,Name,Department,Salary) values(2,'babu','It',60000)";
$result=mysqli_query($conn,$sql);
if($result){
    echo "row added";
}

else{
        echo "error".mysqli_error($conn);
    }

?>