<?php
session_start();
$host="localhost";
$user="root";
$passward="";
$db="loyolaDb";

$data=mysqli_connect($host,$user,$passward,$db);

if($data==false)
{
    die("connection error");
}

if(isset($_POST['submit']))
{
    $dataName=$_POST['name'];
    $dataEmail=$_POST['email'];
    $dataPhone=$_POST['phone'];
    $dataMsg=$_POST['message'];

    $sql="INSERT INTO admission(name,email,phone,message) VALUES ('$dataName','$dataEmail','$dataPhone','$dataMsg')";


    
    $result=mysqli_query($data,$sql);
    echo($result);
    
    if($result)
    {
        $msg="Your APplication has been sent Successfull!!";
        $_SESSION['message']=$msg;
        header("location:./admission.php");
    }
    else
    {
        $msg="Your APplication failed!!";
        $_SESSION['message']=$msg;
        header("location:./admission.php");

    }
        
}

?>