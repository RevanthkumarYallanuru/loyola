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


if(isset($_POST['addStudent']))
{
    $Nname=$_POST['Nname'];
    $Npin=$_POST['Npin'];
    $Nbranch=$_POST['Nbranch'];
    $Ndob=$_POST['Ndob'];
    $Nfn=$_POST['Nfn'];
    $Nmn=$_POST['Nmn'];
    $Naadhar=$_POST['Naadhar'];
    $Nmob=$_POST['Nmob'];
    $Naddress=$_POST['Naddress'];
    $Ndoa=$_POST['Ndoa'];

    $sql="INSERT INTO students(name,pin,branch,dob,fatherName,motherName,aadhaarno,mobile,address,date) VALUES ('$Nname',' $Npin','$Nbranch','$Ndob','$Nfn',' $Nmn','$Naadhar','$Nmob',' $Naddress','$Ndoa')";


    
    $result=mysqli_query($data,$sql);
    echo($result);
    
    if($result)
    {
        $msg="Your APplication has been sent Successfull!!";
        $_SESSION['Nmessage']=$msg;
        header("location:./addStudent.php");
    }
    else
    {
        $msg="Your APplication failed!!";
        $_SESSION['Nmessage']=$msg;
        header("location:./addStudent.php");

    }
        
}

?>