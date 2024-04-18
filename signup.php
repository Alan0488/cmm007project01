<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        //save to database
        $user_id = random_num(20);
        $query = "insert into users(user_id,user_name,password) values('$user_id','$user_name','$password')"

        mysqli_query($query);

        header("Location:signin.php");
        die;
    }else
    {
        echo "Please enter some valid information!";
    }
}
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
<title>SignUp</title>
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
            <div style="font-size: 20px; margin: 10px; color:white;">SignUp</div>
            <input id="text" type="text" name="user"><br><br>
            <input id="text" type="password" name="password"><br><br>

            <input id="button" type="submit" value="SignUp"><br><br>

            <a href="signin.php">Click to SignIn</a><br><br>
    </form>
    </div>
</body>
    </section>
</html>
