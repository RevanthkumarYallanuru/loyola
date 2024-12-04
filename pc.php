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

    if(isset($_SESSION['mes']))
{   
    $mes=$_SESSION['mes'];
 echo   "<script type='text/javascript'>
    alert('$mes');
    </script>" ;
}
$_SESSION['mes']=null;

$host="localhost";
$user="root";
$passward="";
$db="loyolaDB";

$data=mysqli_connect($host,$user,$password,$db);

if($data==false)
{
    die("connetion error");
}

$sql="select * from provicinals where PCissues='YES'";
$result=mysqli_query($data,$sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provisionals</title>
    <link rel="stylesheet" href="./adminx.css">
    
   
    <style>

form {
	width: 50%;
	margin: 40px auto;
	padding: 20px;
	border: 1px solid #ccc;
	border-radius: 10px;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
	display: block;
	margin-bottom: 10px;
}

input[type="text"], input[type="number"], select {
	width: 100%;
	padding: 10px;
	margin-bottom: 20px;
	border: 1px solid #ccc;
	border-radius: 5px;
}

input[type="submit"] {
	background-color: #4CAF50;
	color: #fff;
	padding: 10px 20px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}

input[type="submit"]:hover {
	background-color: #3e8e41;
}







    </style>
   

</head>
<body>
    <?php 
    include './adminTools/adminSidebar.php'
    ?>
    <div class="content">

    <h2>Checking <span> Provisionals</span></h2>

    <form action="./checkPC.php" method="POST">
        <h2 style="text-align:center">Update <span style="color:voilet">values</span></h2>
		<label for="name">Name:</label>
		<input type="text" id="name" name="pname" placeholder="Enter your name" required><br><br>
		
		<label for="pin">PIN:</label>
		<input type="text" id="pin" name="ppin" placeholder="Enter your PIN" required><br><br>
		
		<label for="branch">Branch:</label>
		<input type="text" id="branch" name="pbranch" placeholder="Enter your branch" required><br><br>
		
		<label for="feedue">Fee Due:</label>
		<input type="text" id="feedue" name="pfeedue" placeholder="Enter fee due / NO" required><br><br>
		
		<label for="pcissues">PC Issues:</label>
		<select id="pcissues" name="pcissues" required>
			<option value="">Select an option</option>
			<option value="YES">YES</option>
			<option value="NO">NO</option>
		</select><br><br>
		
		<input type="submit" value="PC Update">
	</form>
`
    <style>
        .btnsections
        {
            max-width: 80%;
            margin: 3% auto 2%;
            padding: 15px;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;

        }

        .btnsections button
        {

            padding: 18px;
            border-radius: 15px;
            background: #000;
            color:#fff;
            transition: all 0.3s ease-in-out;

        }
        .btnsections button:hover
        {
            background:#fff ;
            color:#000; 
        }


           
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
<div class="btnsections">
    <button id="btn1" onclick="change(2)" class="dropdown-item1">
        Show Pending List
    </button>

    <button id="btn1" onclick="change(1)" class="dropdown-item2">
        Show Issued List
    </button>
<style>

.conX
{
    display: none;
    margin-bottom: 50px;
}

.conx2
{
    display: none;
    margin-bottom: 50px;

}


</style>

</div>

    <div class="conX" id="conX">

    <h2>Issued</h2>
        
    <table>
            <thead>
                <tr>
                    <th>PIN</th>
                    <th>Name</th>
                    <th>Branch</th>
                    <th>Fee DUe</th>
                    
                   
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($info = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($info['pin']); ?></td>
                    <td><?php echo htmlspecialchars($info['name']); ?></td>
                    <td><?php echo htmlspecialchars($info['branch']); ?></td>
                    <td><?php echo htmlspecialchars($info['feedue']); ?></td>
                   
                    
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>





    </div>

    <div class="shifts">

 

<div class="conx2" id="conx2">


                    
    <h2>Not Issued</h2>
        
        <table>
                <thead>
                    <tr>
                        <th>PIN</th>
                        <th>Name</th>
                        <th>Branch</th>
                        <th>Fee DUe</th>
                        
                       
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    

                        $sql="select * from provicinals where PCissues='No' ";
                        $result=mysqli_query($data,$sql);


                        while($infox = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($infox['pin']); ?></td>
                        <td><?php echo htmlspecialchars($infox['name']); ?></td>
                        <td><?php echo htmlspecialchars($infox['branch']); ?></td>
                        <td><?php echo htmlspecialchars($infox['feedue']); ?></td>
                       
                        
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
    
    
    
    

</div>


</div>
    </div>
<script>
    var v1=document.getElementById("conX");
    var v2=document.getElementById("conx2");
function change(m)
{

    if(m==1)
{
    v1.style.display='block';
    v2.style.display='none';
}
else
{
    v1.style.display='none';
    v2.style.display='block';
}

}


</script>

</body>
</html>