
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

    if($_SESSION['Nmessage'])
    {
        
        $mes=$_SESSION['Nmessage'];
     echo   "<script type='text/javascript'>
        alert('$mes');
        </script>" ;
    }
    $_SESSION['Nmessage']=null;
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
            <h1>Add <span>Student</span></h1>
            <span class="texter">Admitting new students:</span>
            <div class="formal">
                        <h3>New Admission</h3>
            
                    <form action="./adscheck.php" method="POST">
                        
                            <div class="data">
                                <label for="name">Name</label>
                                <input type="text" name="Nname" id="name" placeholder="Enter Student Name" required>
                            </div>

                            <div class="data">
                                <label for="pin">Pin</label>
                                <input type="text" name="Npin" id="pin" placeholder="Enter Student PIN" required>
                            </div>

                            <div class="data">
                                <label for="branch">Branch</label>
                                <input type="text" name="Nbranch" id="branch" placeholder="Enter Branch" required>
                            </div>

                            <div class="data">
                                <label for="dob">Date Of Birth</label>
                                <input type="text" name="Ndob" id="dob" placeholder="Enter Date of Birth" required>
                            </div>

                            <div class="data">
                                <label for="fn">Father Name</label>
                                <input type="text" name="Nfn" id="fn" placeholder="Enter Father Name" required>
                            </div>

                            <div class="data">
                                <label for="mn">Mother Name</label>
                                <input type="text" name="Nmn" id="fn" placeholder="Enter mother Name" required>
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
                                <label for="address">Address</label>
                                <input type="text" name="Naddress" id="address" placeholder="Enter Father Name" required>
                            </div>

                            <div class="data">
                                <label for="Doa">Date of Addmission</label>
                                <input type="text" name="Ndoa" id="Doa" placeholder="Enter Date of Admission" required>
                            </div>

                            <div class="data">
                                <input type="submit" name="addStudent" value="ADD">
                            </div>


                    </form>
            </div>
        </div>
    </div>
</body>
</html>