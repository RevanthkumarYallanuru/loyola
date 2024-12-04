<?php


    $host="localhost";
    $user='root';
    $pass='';
    $db="loyolaDB";

    $data=mysqli_connect($host,$user,$pass,$db);

    if($data==false)
    {
        die("connecton Error");
    }
echo"hello";
   
        echo " \n hai sir ";
        $name=$_POST['pname'];
        $pin=$_POST['ppin'];
        $branch=$_POST['pbranch'];
        $fee=$_POST['pfeedue'];
        $pci=$_POST['pcissues'];//name

        $sql="insert into provicinals(name,pin,branch,feedue,PCissues) values('$name','$pin','$branch','$fee','$pci')";
        $result=mysqli_query($data,$sql);
        
        if($result)
        {
            session_start();
            $_SESSION['mes']="data sent successfullly";
            header("location:./pc.php");
        }
        else
        {
           
            echo("insertion error");
        }
   


?>