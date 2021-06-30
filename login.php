<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Login</title>
    <style>
    *{
        font-family:"Copperplate";
        
    }
    .header{
        color:white;
        margin-left:35%;
        background-color:green;
        width:400px;
        text-align:center;
        height:80px;
        position:absolute;
        top:0px;
        
    }
    .content{
        position:absolute;
        top: 100px;
        font-size:20px;
        
        
        margin-left:35%;
        width: 500px;
        height: 300px;
        
        display:flex;
        flex-direction:column;
        justify-content:space-around;
    }
    input[type=text],input[type=password]{
        width:75%;
    }
    button{
        width:25%;
        margin-left:30%;
        background-color:green;
        color:white;
        border-radius: 10px;
    }
    </style>

</head>
<body>
   <div class="login">
   <form action="select.php" method="post">
   <div class="header">
   <h1> LOGIN</h1>
   <hr color=white>
   </div>
   <div class="content">
   <label>Username</label>
   <input type="text" name="username" </div>
   <label>Password</label>
   <input type="password" name="password" </div>
   <button> Log in</button>
   <br>
   <a href="signup.php" style="margin-left:35%"> Sign Up</a>
   </div>
   </form>
</body>
</html>