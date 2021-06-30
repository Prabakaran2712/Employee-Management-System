<?php
$conn=mysqli_connect("localhost","root","","userdb");
if($conn){
    echo "connected";
}
else{
    echo "not connected ";
}
?>