<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Loyola Polytechnic</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

    <nav>
        <label class="logo">
            LOYOLA POLYTECHNIC
        </label>

        <ul>
            <li>
                <a href="">Home</a>

            </li>
            <li>
            <a href="#contact">Contact</a>
                
            </li>

            <li>
            <a href="./admission.php">Admission</a>
            </li>
            <li>
            <a href="./login.php" class="btn btn-warning">Login</a>

            </li>
        </ul>
    </nav>

    <div id="slides" class="slidesbar">
        
    </div>

    <div class="container">
        <div class="row">

        <div class="col-md-4">
                <img src="./images/wel.jpg" alt="">
        </div>

        <div class="col-md-8">
        <h2>Welcome to <span>LOYOLA POLYTECHNIC COLLEGE </span></h2>
        <p>Loyola Polytechnic, Formerly known as Sri Y.S Raja Reddy Polytechnic, was established in the year 1980 by Sri Y.S Raja Reddy Educational Trust, Pulivendla led by Late Dr. Y.S Rajasekhar Reddy, former Chief Minister of Andhra Pradesh as its President. In the year 1993 the administration of the college was handed over to the Jesuits who run wellknown colleges like Andhra Loyola College, Vijayawada Loyola College, Chennai. In 1993 Government of Andhra Pradesh accorded Minority Status to Loyola (YSRR) Polytechnic by which 30% seats are reserved for Christian Minority students from A.P. and the rest are admitted by the Government through Polycet. The Minority students are admitted on the basis of their merit in qualifying SSC examination.</p>
        </div>

        </div>

    </div>

    <div class="course">
        <div class="title">
            <h2>COURSES <span>We OFFER</span></h2>

        </div>
        <div class="case">

        <div class="c1">
            <img src="./images/computer.jpg" alt="">
            <div class="info">
                <h4>
                   COMPUTER SCIENCE
                </h4>   
            </div>
        </div>

        <div class="c1">
            <img src="./images/ece.jpg" alt="">
            <div class="info">
                <h4>
                   ELECTRICAL & ELECTRONICS </br> COMMUICATIONS
                </h4>   
            </div>
        </div>

        <div class="c1">
            <img src="./images/electric.jpg" alt="">
            <div class="info">
                <h4>
                  ELECTRICAL
                </h4>   
            </div>
        </div>

        <div class="c1">
            <img src="./images/civil.jpg" alt="">
            <div class="info">
                <h4>
                   CIVIL
                </h4>   
            </div>
        </div>

        <div class="c1">
            <img src="./images/mechanical.jpg" alt="">
            <div class="info">
                <h4>
                   MECHANICAL
                </h4>   
            </div>
        </div>

        <div class="c1">
            <img src="./images/mini.jpg" alt="">
            <div class="info">
                <h4>
                   MINING
                </h4>   
            </div>
        </div>


        </div>
    </div>

<div class="dabba">
    <div class="title">
        <h2>Our <span>MANAGEMENT</span></h2>
    </div>
    <div class="admins">
        <div class="card">
            <div class="ims">
                <img src="./images/principal.jpg" alt="">
            </div>
            <span>CORRESPONDENT</span>
            <h3>MARTIN BROTTO PAUL</h3>
        </div>

        <div class="card">
            <div class="ims">
                <img src="./images/principal.jpg" alt="">
            </div>
            <span>PRINCIPAL</span>
            <h3>MARTIN BROTTO PAUL</h3>
        </div>


        <div class="card">
            <div class="ims">
                <img src="./images/principal.jpg" alt="">
            </div>
            <span>VICE PRINCIPAL</span>
            <h3>VIJAYA RAJU</h3>
        </div>


    </div>
        <div class="hods">
            <h3>OUR <span>Heads Of Departments</span></h3>
            <div class="shows">
                <div class="cs">
                    <img src="./images/principal.jpg" alt="">
                    <span>VIJAYA RAJU</span>
                    <h6>CSM</h6>
                </div>

                <div class="cs">
                    <img src="./images/principal.jpg" alt="">
                    <span>VIJAYA RAJU</span>
                    <h6>ECE</h6>
                </div>


                <div class="cs">
                    <img src="./images/principal.jpg" alt="">
                    <span>VIJAYA RAJU</span>
                    <h6>EEE</h6>
                </div>

                <div class="cs">
                    <img src="./images/principal.jpg" alt="">
                    <span>VIJAYA RAJU</span>
                    <h6>CE</h6>
                </div>

                <div class="cs">
                    <img src="./images/principal.jpg" alt="">
                    <span>VIJAYA RAJU</span>
                    <h6>MEC</h6>
                </div>

                <div class="cs">
                    <img src="./images/principal.jpg" alt="">
                    <span>VIJAYA RAJU</span>
                    <h6>MNG</h6>
                </div>
            </div>
        </div>
</div>

<div class="footer">
    <div class="address">
        <div class="logo">
        <img src="./images/location.svg" alt="">
        </div>
        <span>
        Loyola Polytechnic College (YSRR), Pulivendla - 516390, YSR District, Andhra Pradesh, India.
        </span>
    </div>
    <div class="name">
        <h3>LOYOLA POLYTECHNIC </h3>
    </div>
    <div class="cont" id="contact">
        <label ><img src="./images/call.svg" alt=""> +91 9909987834 </label>
        <label ><img src="./images/mail.svg" alt=""> loyalaAdmin@gamil.com </label>
    </div>
</div>
    <script>
        var sbar =document.getElementById('slides')
        
        var count =1;
        function change()
        {
            console.log("function");
            if(count===1)
        {
            sbar.style.backgroundImage=' url("./images/OIP.jpg")';
            count=2;
        }
        else   if(count===2)
        {
            sbar.style.backgroundImage=' url("./images/slide2.jpg")';
            count=3;
        }
        else if(count===3)
        {
            sbar.style.backgroundImage=' url("./images/slide3.jpg")';
            count=1;
        }
        }

        setInterval(() => { change();
            
        }, 4000);
    </script>
</body>
</html>