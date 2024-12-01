<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']))
{
    header("location:./login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./adminx.css">
</head>
<body>
    <header id="home" class="header">
        <a href="#home">Student Dashboard</a>

        <div class="logout">
            <a href="./logOut.php">Logout <img src="./images/logout.svg" alt=""></a>
        </div>
    </header>
    <aside>
        <ul>
            <li>
                <a href="">MY Course</a>
            </li>

            
            <li>
                <a href="">MY Resukts</a>
            </li>

            
        </ul>
    </aside>
    <div class="content">

    <h2>Wecome to <span> LOYOLA POLYTECHNIC </span> Student's Dashboard</h2>

    </div>
</body>
</html>