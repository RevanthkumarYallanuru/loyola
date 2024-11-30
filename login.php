<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>login</title>
</head>
<body>
    
    <center>
        <div class="form_deg">
            <center class="title_deg">
                Login 👇
                <h6 class="errs">
                    <?php
                    error_reporting(0);
                     session_start();

                    echo $_SESSION["message"];
                    session_destroy();
                    ?>
                </h6>
                
            </center>
            <form action="check.php" method="POST" class="login_form">
                    <div>
                        <label class="lable_deg">username</label>
                            <input type="text" name="username" placeholder="User Id" required >
                       
                    </div>

                    <div>
                        <label class="lable_deg">Password</label>
                            <input type="password" name="password" placeholder="password" required >
                       
                    </div>

                    <div>
                        
                            <input class="btn btn-primary" type="submit"  placeholder="User Id" required >
                       
                    </div>
            </form>

        </div>
    </center>

</body>
</html>