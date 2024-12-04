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
    <link rel="stylesheet" href="">
    <style>
        .container-xy
        {
            
            margin: 50px auto 30px;
            display: flex;
            flex-direction: row;
            gap: 30px;
            

        }

        .container-xy a .tx
        {
            width: 280px;
            height: 200px;
            padding: 5px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 0px 12px 10px 2px black;
            border-top: 25px solid #12121212;
            padding: 20px;

            background-image: radial-gradient( circle 382px at 50% 50.2%,  rgba(73,76,212,1) 0.1%, rgba(3,1,50,1) 100.2% );

            

        }
        .container-xy a .tx:hover
        {
            background-image: linear-gradient( 109.6deg,  rgba(228,107,232,1) 11.2%, rgba(87,27,226,1) 96.7% );
        }


        .container-xy a
        {
            text-decoration: none;
            color:#fff;
        }

        .container-xy a .tx img
        {
            height: 180px;
            width: 180px;
        }
    </style>
</head>
<body>
    <?php 
    include './adminTools/adminSidebar.php'
    ?>
    <div class="content">

    <h2>Wecome to <span> LOYOLA POLYTECHNIC </span> Admin's Dashboard</h2>

    <div class="container-xy">
        <a href="https://mrdollar07techworld.github.io/loyola-transfercertificate/dex1.html">
    <div class="tx">
        <h2>Transfer Certificate</h2>
        <img src="./images/tc.svg" alt="">
    </div>
    </a>

    <a href="https://mrdollar07techworld.github.io/loyola-certificate//Certificate-Generator-master/">
    <div class="tx">
        <h2>Study Certificate</h2>
        <img src="./images/cert.png" alt="">
    </div>
    </a>


    <a href="./pc.php">
    <div class="tx">
        <h2>Check Provisional</h2>
        <img src="./images/pc.svg" alt="">
    </div>
    </a>

    </div>

    </div>
</body>
</html>