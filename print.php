<style>
    table{
        width: 100%;
        height: 80%;
        border-color: black;
    }
    th{
        font-size: large;
        border-color: black;
    }
    #d{
       position: absolute;
       bottom: 10px;
       background-color: green;
       color: white;
    }
    #back{
        position: absolute;
        bottom: 60px;
        background-color: red;
        color: white;
    }
</style>
<?php
include "config.php";
$sql="select * from employees";
$result=mysqli_query($conn,$sql);
echo "<table ><tr style='background-color:brown;color:white'><th>EMP-ID</th><th>Employee Name</th><th>Department</th><th>Salary</th></tr>";
while($row = mysqli_fetch_assoc($result)){

echo"<tr><th>$row[EmpID]</th><th>$row[Name]</th><th>$row[Department]</th><th>$row[Salary]</th>";

}

?>
<button id="d"> print </button>
<a href="Home.php"><button id='back'>Back</button></a>
<script>
function hi(){
   window.print();
}
    const x=document.getElementById("d");
    x.addEventListener('click',hi);

</script>