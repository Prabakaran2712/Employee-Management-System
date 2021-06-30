<h1>Update List</h1>
<form action="update2.php" method="post">
<label>Employee-Id</label>
<input type="number" name="eno" required><br>
<label>Name</label>
<input type="text" name="name" required><br>
<label>Department</label>
<input type="text" name="dept" required><br>
<label>Salary</label>
<input type="number" name="salary" required><br>
<button id="update">Update</button>
</form>
<a href="Home.php" id="k"><button>Back</button></a>
<style>
    h1{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        color: green;
        text-align: center;
    }
    label{
    position: relative;
    font-size: 30px;
    right: -600px;
    font-family: sans-serif;
}
#k{
    position: absolute;
    
    margin-top: 30px;
    background-color: red;
    color: white;
    

}
button{
    position: absolute;
    left: 750px;
    margin-top: 30px;
    background-color: green;
    color: white;
}
input{
    margin-top: 10px;
    position: absolute;
    left: 55%;
}
</style>