<?php
    $n=$_POST['number'];

    include "config.php";
    $sql="select * from employees where EmpID=".$n;
    $result=mysqli_query($conn,$sql);
    
    if($row = mysqli_fetch_assoc($result)){
    echo "<table ><tr style='background-color:brown;color:white'><th>EMP-ID</th><th>Employee Name</th><th>Department</th><th>Salary</th></tr>";
    echo"<tr><th>$row[EmpID]</th><th>$row[Name]</th><th>$row[Department]</th><th>$row[Salary]</th>";
    echo"</table>";
    echo"<a href='search.php'><button>Back</button></a>";
    }
    else{
        
        echo '<script>
        alert("No such Employee");
        window.location.href="search.php";
        </script>';
    }
    ?>
    
    <style>
        table{
            width: 100%;
        }
        button{
            background-color: green;
            color: white;
        }
    </style>