<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Sign up</title>
    <style>
        .signup{
            text-align: center;
           
        }
        input{
             margin: 20px;
        }
        .heding{
            margin-bottom: 30px;
            width: 270px;
            height: 50px;
            background-color: green;
            color: white;
            padding-top: 30px;
            margin-left: 41%;
        }
        button{
            background-color: green;
            color: white;
            border-radius: 10px;
            width:100px;
            height: 50px;
        }
        #g{
            position: absolute;
            left: 750px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="signup">
<div class="heding">Register</div>
<div class="content">
<form action="insert.php" method="post">
<label>Username</label>
   <input type="text" name="username" required><br>
   <label>Password</label>
   <input type="text" name="password" required><br>
   <label>Email</label>
   <input type="email" name="email" required><br>
   <button>Submit</button>
   </form></div></div>
   <a href="login.php" id="g"><button>Back</button></a>
</body>
</html>