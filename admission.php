<?php 
error_reporting(0);
    session_start();
    session_destroy();
    if($_SESSION['message'])
    {
        $mes=$_SESSION['message'];
     echo   "<script type='text/javascript'>
        alert('$mes');
        </script>" ;
    }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addmission Form</title>
    <link rel="stylesheet" href="./style.css">
    <title>Loyola Polytechnic</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        

    .containerx {
    max-width: 400px;
    margin:  auto ;
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="tel"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: skyblue;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}
.mixxer
{
    position: relative;
    top:100px;
    bottom: 29px;
    margin-bottom: 120px;
}
nav ul
{
    position: relative;
    top: -74px;
}
#message
{
    height: 120px;
}
    </style>
</head>
<body>
   

    <nav>
        <label class="logo">
            LOYOLA POLYTECHNIC
        </label>

        <ul>
            <li>
                <a href="./index.php">Home</a>

            </li>
            <li>
            <a href="#contact">Contact</a>
                
            </li>

            <li>
            <a href="./admission.php">Admission</a>
            </li>
            <li>
            <a href="./login.php" class="btn btn-warning">Login</a>

            </li>
        </ul>
    </nav>
    <div class="mixxer">

    <div class="containerx">
        <h2>Admission Form</h2>
        <form action="./amdCheck.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="message">Message:</label>
            <input type="text" id="message" name="message" required>

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
    </div>


    
<div class="footer">
    <div class="address">
        <div class="logo">
        <img src="./images/location.svg" alt="">
        </div>
        <span>
        Loyola Polytechnic College (YSRR), Pulivendla - 516390, YSR District, Andhra Pradesh, India.
        </span>
    </div>
    <div class="name">
        <h3>LOYOLA POLYTECHNIC </h3>
    </div>
    <div class="cont" id="contact">
        <label ><img src="./images/call.svg" alt=""> +91 9909987834 </label>
        <label ><img src="./images/mail.svg" alt=""> loyalaAdmin@gamil.com </label>
    </div>
</div>
</body>
</html>