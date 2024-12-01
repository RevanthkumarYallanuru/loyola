
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

    if($_SESSION['Nxmessage'])
    {
        
        $mes=$_SESSION['NTmessage'];
     echo   "<script type='text/javascript'>
        alert('$mes');
        </script>" ;
    }
    $_SESSION['NTmessage']=null;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="icon" href="./images/civil.jpg">
   <link rel="stylesheet" href="./adminx.css">
   <link rel="stylesheet" href="./adminTools/addstudent.css">
</head>
<body>
    <?php
    include './adminTools/adminSidebar.php'
    ?>
    <div class="content">
        <div class="hexa">
            <h1>Add <span>Teachers</span></h1>
            <span class="texter">Admitting new teachers:</span>
            <div class="formal">
                        <h3>New Joining</h3>
            
                    <form action="./tcscheck.php" method="POST">
                        
                            <div class="data">
                                <label for="name">Name</label>
                                <input type="text" name="Nname" id="name" placeholder="Enter Teacher Name" required>
                            </div>

                            <div class="data">
                                <label for="pin">Id</label>
                                <input type="text" name="Npin" id="pin" placeholder="Enter Teacher Id" required>
                            </div>

                            <div class="data">
                                <label for="dob">Subject</label>
                                <input type="text" name="Nsub" id="dob" placeholder="Enter Date of Birth" required>
                            </div>

                            <div class="data">
                                <label for="branch">Department</label>
                                <input type="text" name="Nbranch" id="branch" placeholder="Enter Department" required>
                            </div>

                            <div class="data">
                                <label for="dob">Qualification</label>
                                <input type="text" name="Nq" id="dob" placeholder="Enter Qualification " required>
                            </div>

                            <div class="data">
                                <label for="fn">Experience</label>
                                <input type="text" name="Ne" id="fn" placeholder="Enter Experience" required>
                            </div>

                            <div class="data">
                                <label for="mn">Age</label>
                                <input type="text" name="Nage" id="fn" placeholder="Enter Age" required>
                            </div>

                            <div class="data">
                                <label for="aadar">Aadhar No</label>
                                <input type="text" name="Naadhar" id="aadar" placeholder="Enter Aadhaar Number" required >
                            </div>

                            <div class="data">
                                <label for="Mn">Mobile Number</label>
                                <input type="text" name="Nmob" id="Mn" placeholder="Enter Mobile number" required>
                            </div>

                            <div class="data">
                                <label for="Doa">Email</label>
                                <input type="text" name="Nmail" id="Doa" placeholder="Enter Email" required>
                            </div>

                            <div class="data">
                                <label for="address">Address</label>
                                <input type="text" name="Naddress" id="address" placeholder="Enter Father Name" required>
                            </div>

                           

                            <div class="data">
                                <input type="submit" name="addTeacher" value="ADD">
                            </div>


                    </form>
            </div>
        </div>
    </div>
</body>
</html>