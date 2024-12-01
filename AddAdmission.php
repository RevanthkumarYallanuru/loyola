
<?php
error_reporting();
session_start();
if(!isset($_SESSION['username']))
{
    header("location:./login.php");
}
/*
elseif($_SESSION['userType']=="student")
{
    header("location:./login.php");
}
    
*/
    $host='localhost';
    $user='root';
    $passward="";
    $db="loyolaDB";

    $data=mysqli_connect($host,$user,$passward,$db);

    if($data==false)
    {
        die("connection error");
    }

    $sql="SELECT * from admission";
    $result=mysqli_query($data,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./adminTools/add.css">
    <link rel="stylesheet" href="./adminx.css">
    <?php 

include './adminTools/admincss.php';
?>
</head>
<body>
    <?php 

    include './adminTools/adminSidebar.php';
    ?>
    <div class="content">
        <div class="admadd">
            <h1>
                Applied for <span> Admission </span>
            </h1>

            <table border="1px">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                </tr>
                <?php 

                    while($info=$result->fetch_assoc())
                    {
                ?>
                <tr>
                    <td><?php echo "{$info['name']}"; ?></td>
                    <td><?php echo "{$info['email']}"; ?></td>
                    <td><?php echo "{$info['phone']}"; ?></td>
                    <td><?php echo "{$info['message']}"; ?></td>
                </tr>
                <?php
                    }
                ?>
            </table>

        </div>
    </div>
</body>
</html>