<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']))
{
    header("location:./login.php");
}
/*
else if($_SESSION['userType']="student")
{
    header("location:./login.php");
}
    */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./admin.css">
</head>
<body>
    <header id="home" class="header">
        <a href="#home">Admin Dashboard</a>

        <div class="logout">
            <a href="./logOut.php">Logout <img src="./images/logout.svg" alt=""></a>
        </div>
    </header>
    <aside>
        <ul>
            <li>
                <a href="">Admisssion</a>
            </li>

            
            <li>
                <a href="">Add student</a>
            </li>

            
            <li>
                <a href="">View student</a>
            </li>

            
            <li>
                <a href="">Add Teacher</a>
            </li>

            
            <li>
                <a href="">View Teacher</a>
            </li>

            
            <li>
                <a href="">Add Courses</a>
            </li>

            
            <li>
                <a href="">View Courses</a>
            </li>
        </ul>
    </aside>
    <div class="content">

    <h2>Wecome to <span> LOYOLA POLYTECHNIC </span> Admin's Dashboard</h2>

    </div>
</body>
</html>