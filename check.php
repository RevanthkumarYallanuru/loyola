<?php
error_reporting(0);
session_start();
$host="localhost";
$user="root";
$password="";
$db="loyolaDB";
$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
    die("connection Errors");
}


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['username'];
    $pass=$_POST['password'];
    $sql="select * from user where username='".$name."' AND password='".$pass."' ";
    echo("Hello $name and $pass");
    $result=mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);

    #to navigate to the co ordinate pages 
    if($row["user"]==="student")
    {
        $_SESSION['username']=$name;
        $_SESSION['userType']="student";
        header("location:Studentdash.php");
    }
  else  if($row["user"]==="admin")
    {
        $_SESSION['username']=$name;
        $_SESSION['userType']="admin";

        header("location:admindash.php");
    }
    else
    {
        $mdsg="user details not found";
        $_SESSION['message']=$mdsg;
        
        header("location:login.php");
    }
}
?>