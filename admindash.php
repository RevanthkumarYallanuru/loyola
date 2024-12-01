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
    <link rel="stylesheet" href="./adminx.css">
</head>
<body>
    <?php 
    include './adminTools/adminSidebar.php'
    ?>
    <div class="content">

    <h2>Wecome to <span> LOYOLA POLYTECHNIC </span> Admin's Dashboard</h2>

    </div>
</body>
</html>