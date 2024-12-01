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


    $host='localhost';
    $user='root';
    $passward="";
    $db="loyolaDB";

    $data=mysqli_connect($host,$user,$passward,$db);

    if($data==false)
    {
        die("connection error");
    }

    $sql="SELECT * from teachers";
    $result=mysqli_query($data,$sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./adminx.css">
    <style>
    
.table-container {
    max-width: 1200px;
    margin: auto;
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #333;
}

table {
    width: 90%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: skyblue;
    color: white;
}

tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

tbody tr:hover {
    background-color: #f1f1f1;
}

td {
    color: #555;
}

@media (max-width: 600px) {
    th, td {
        padding: 8px;
        font-size: 14px;
    }
}

    </style>
</head>
<body>
    <?php 
    include './adminTools/adminSidebar.php'
    ?>
    <div class="content">

    <h2>Teachers <span> Table </span> LOYOLA POLYTECHNIC COLLEGE</h2>

    <div class="table-container">
        <h2>Teachers Records</h2>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Dept</th>
                    <th>Qualification</th>
                    <th>Experience</th>
                    <th>Age</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($info = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($info['tid']); ?></td>
                    <td><?php echo htmlspecialchars($info['name']); ?></td>
                    <td><?php echo htmlspecialchars($info['subject']); ?></td>
                    <td><?php echo htmlspecialchars($info['department']); ?></td>
                    <td><?php echo htmlspecialchars($info['qualification']); ?></td>
                    <td><?php echo htmlspecialchars($info['experience']); ?></td>
                    <td><?php echo htmlspecialchars($info['age']); ?></td>
                    <td><?php echo htmlspecialchars($info['phone']); ?></td>
                    <td><?php echo htmlspecialchars($info['email']); ?></td>
                    <td><?php echo htmlspecialchars($info['address']); ?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    </div>
</body>
</html>