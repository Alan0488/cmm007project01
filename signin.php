<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    body{
        background: #e8e7e7;
    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calicut Book</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<header class="header">
    <a href="#" class="Logo">CaliCut<span>NoteBook</span></a>
    <nav class="navbar">
        <a href="index.html">Home</a>
        <a href="meals.html">Meals</a>
        <a href="kitchen.html">Kitchen Tips</a>
        <a href="about.html">About</a>
    </nav>
    <div class="activity-section">
        <i class='bx bx-search'></i>
        <i class='bx bxs-heart'></i>
        <i class='bx bx-cart'></i>
    </div>
    
</header>
<section>
<title>Login</title>
<body>
    <style type="text/css">
        #text{
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
            
        }
        #button{
            padding: 10px;
            width: 100px;
            color: white;
            background-color: lightblue;
            border:none;
            
        }
        #box{
            background-color: grey;
            margin: auto;
            width: 300px;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <div id="box">
        <form method="post">
            <div style="font-size: 20px; margin: 10px; color:white;">Login</div>
            <input id="text" type="text" name="user"><br><br>
            <input id="text" type="password" name="password"><br><br>

            <input id="button" type="submit" value="SignIn"><br><br>

            <a href="signup.php">Signup</a><br><br>
    </form>
    </div>
</body>
    </section>
</html>