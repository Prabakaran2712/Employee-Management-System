<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <style>
    table{
        width: 100%;
        border-collapse: collapse;
        border: black solid 2px;
        color: black;
    }
     th{
        border: black solid 2px;


    }
    #hi{
        background-color: brown;
    }
    table button{
        background-color: red;
        color: white;
        width: 100%;
        border-color: black;
    }
    form {
    width: 300px;
    margin: 0 auto;
}
label{
    position: relative;
    font-size: 30px;
    right: 20px;
    font-family: sans-serif;
}
input{
    margin-top: 10px;
    position: absolute;
    left: 55%;
}
#Add{
    width: 100px;
    position: absolute;
    top: 350px;
    left: 820px;
    background-color: green;
    color: white;
    border-radius: 5px;
}
#logout{
    width: 100px;
    position: absolute;
    top: 390px;
    left: 820px;
    background-color: red;
    color: white;
    border-radius: 5px;

}
#print{
    width: 100px;
    position: absolute;
    top: 430px;
    left: 820px;
    background-color: red;
    color: white;
    border-radius: 5px;

}
#s{
    width: 100px;
    position: absolute;
    top: 470px;
    left: 820px;
    background-color: green;
    color: white;
    border-radius: 5px;
    
}
#u{
    width: 100px;
    position: absolute;
    top: 520px;
    left: 820px;
    background-color: green;
    color: white;
    border-radius: 5px;

}

    </style>
</head>
<body>

<?php
session_start();
echo "<h1>welcome  ".$_SESSION['username']."</h1>";
include "config.php";
$sql="select * from employees";
$result=mysqli_query($conn,$sql);
// $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
// foreach($row as $x => $x_value) {
//     echo "Key=" . $x . ", Value=" . $x_value;
//     echo "<br>";
//   }

echo "<table ><tr style='background-color:brown;color:white'><th>EMP-ID</th><th>Employee Name</th><th>Department</th><th>Salary</th></tr>";
while($row = mysqli_fetch_assoc($result)){

echo"<tr><th>$row[EmpID]</th><th>$row[Name]</th><th>$row[Department]</th><th>$row[Salary]</th><th><a href='delete.php?id=".$row['EmpID']."'><button>Delete</button></a></th>";

}
echo"</table>";
?>
<form action="add.php" method="post">
<label>Employee-Id</label>
<input type="number" name="eno" required><br>
<label>Name</label>
<input type="text" name="name" required><br>
<label>Department</label>
<input type="text" name="dept" required><br>
<label>Salary</label>
<input type="number" name="salary" required><br>
<button id="Add">Add</button>
</form>
<a href="logout.php"><button id="logout"> Log Out</button></a>
<a href="search.php"><button id="s"> Search</button></a>
<a href="print.php"><button id="print"> Print </button></a>
<a href="update.php"><button id="u"> Update </button></a>



    
</body>
</html>