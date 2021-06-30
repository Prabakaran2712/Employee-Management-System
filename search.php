<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search</title>
<style>
    body{
        text-align: center;
        font-family: sans-serif;
        color: brown;
    }
    button{
        background-color: green;
        color: white;
        margin-top: 10px;
    }
    </style>
    

</head>
<body>
    <h1>Enter the Employee id to search</h1>
    <form name="form" action="search2.php" method="post">
    <input type="number" name='number' required ><br>
    <button>Search</button>
    </form>
    <a href="Home.php"><button>Back</button></a>
   
</body>
</html>