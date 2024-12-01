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


if(isset($_POST['addTeacher']))
{
    $Nname=$_POST['Nname'];
    $Npin=$_POST['Npin'];
    $Nbranch=$_POST['Nbranch'];
    $Nsub=$_POST['Nsub'];
    $Nq=$_POST['Nq'];
    $Ne=$_POST['Ne'];
    $Nage=$_POST['Nage'];
    $Naadhar=$_POST['Naadhar'];
    $Nmob=$_POST['Nmob'];
    $Nmail=$_POST['Nmail'];
    $Naddress=$_POST['Naddress'];
    $sql="INSERT INTO teachers(name,tid,subject,department,qualification,experience,age,phone,email,address) VALUES ('$Nname',' $Npin','$Nsub','$Nbranch','$Nq',' $Ne','$Nage','$Nmob',' $Nmail','$Naddress')";


    
    $result=mysqli_query($data,$sql);
    echo($result);
    
    if($result)
    {
        $msg="Your APplication has been sent Successfull!!";
        $_SESSION['NTmessage']=$msg;
        header("location:./addTeacher.php");
    }
    else
    {
        $msg="Your APplication failed!!";
        $_SESSION['NTmessage']=$msg;
        header("location:./addTeacher.php");

    }
        
}

?>