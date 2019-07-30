<?php 

$con = mysqli_connect('localhost', 'root', '', 'greengasdb');
if(!$con)
    echo "Connection Failure, Try Again Later !!";

function profile()
{
    global $con;
    $query = "SELECT * FROM `customer_register` WHERE UserId2='5000'";
    $run = mysqli_query($con, $query);
    $data = mysqli_fetch_array($run);
    ?>

    <p> <?php echo $data[0] ?> </p>
    <p> <?php echo $data[1] ?> </p>
    <p> <?php echo $data[2] ?> </p>
    <p> <?php echo $data[3] ?> </p>
    <p> <?php echo $data[4] ?> </p>
    <p> <?php echo $data[5] ?> </p>
    <p> <?php echo $data[6] ?> </p>
    <p> <?php echo $data[7] ?> </p>
    <p> <?php echo $data[8] ?> </p>
    <p> <?php echo $data[9] ?> </p>
    <p> <?php echo $data[10] ?> </p>
    <p> <?php echo $data[11] ?> </p>
    <p> <?php echo $data[12] ?> </p>

    <?php
                
}

function showInfo()
{
    global $con;
    $query = "SELECT * FROM `booking`";
    $run = mysqli_query($con, $query);

    if($run == TRUE)
    {
        while($data = mysqli_fetch_array($run))
        {
            ?>
            <tr>
                <td> <?php echo $data[0]; ?> </td>
                <td> <?php echo $data[1]; ?> </td>
                <td> <?php echo $data[2]; ?> </td>
                <td> <?php echo $data[3]; ?> </td>
                <td> <?php echo $data[4]; ?> </td>
                <td> <?php echo $data[5]; ?> </td>
            </tr>
            <?php
        }
    }
}


?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title> Green Gas </title>
        
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="../css/Footer-with-button-logo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    
    <body>
       
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="#" id="home_nav">Home</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#" id="contact_us_nav">Contact Us</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#" id="faqs_nav">FAQs</a></li>
                    <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> My Profile </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#" id="update_profile_nav">Update Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" id="booking_nav">Booking</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../index.php" id="log_out_nav">Log Out</a>
                        </div>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="#"></a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#"></a> </li>
                </ul>
            </div>
 
            <a class="navbar-brand" href="#"> <img src="../Pictures/logo.png" class="img-fluid" alt=""> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"> </span></button> 
        </nav>
        
        <!--    BODY PART     -->
        <div class="main">
            
            <!--  Profile Starts  -->
            <div id="update_profile">
                <div class="container">
                    <h1> PROFILE </h1>
                    <div class="row">
                        <div class="col-md-3">
                            <p> Customer ID</p>
                            <p> Joining Date </p>
                            <p> Username </p>
                            <p> Gender </p>
                            <p> Email ID </p>
                            <p> Contact No </p>
                            <p> Date of Birth </p>
                            <p> Address </p>
                            <p> Pan Card </p>
                            <p> Aadhar Card </p>
                            <p> State </p>
                            <p> City </p>
                            <p> Zone </p>
                        </div>

                        <div class="col-md-4">
                            <?php profile(); ?>
                        </div>

                        <div class="col-md-5">
                            <img src="Customers.png" alt="Customer Pic" class="img-fluid"><br><br><br><br>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- Profile Ends -->
            
            <!--  Booking Starts  -->
            <div id="booking">
                <div class="container">
                    <h1> BOOKING </h1>
                    <table class="w3-table-all" id="booking_table">
                        <thead>
                            <tr class="w3-red">
                                <th>Customer ID</th>
                                <th>Customer Name</th>
                                <th>Booking Date</th>
                                <th>Delivery Date</th>
                                <th>Cylinder ID</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <?php showInfo(); ?>
                    </table>
                    <br /><br />
                    <form action="login.php" method="POST">
                        <input type="text" placeholder="Customer ID" name="cust_id">
                        <input type="text" placeholder="Customer Name" name="cust_name"><br />
                        <input type="submit" name="cust_booking" class="btn btn-primary" style="font-size: 2vh; width: 10vh;" value="BOOK">
                    </form>
                </div>
            </div>
            <!--  Booking Ends  -->
            
            <div id="home">
            <div class="part1">
                <h1> About Us </h1>
                <p>
                    Green Gas is today one of the largest E-LPG networks in the world. Indian Oil pioneered the launch of Green Gas in India in 2017 and transformed the lives of millions of people with the introduction of the safe and reliable LPG cylinder connection both for customers and dealers. 
                </p>
                <p>
                    It also led to a substantial improvement in the health of women in rural areas by replacing smoky and unhealthy chullahs. It is today an efficient and convenient online LPG cylinder booking system.
                </p>
                <p>
                    LPG is a blend of Butane and Propane readily liquefied under moderate pressure. LPG vapour is heavier than air; thus it normally settles down in low-lying places. Since LPG has only a faint scent, a mercaptan odorant is added to help in its detection.
                </p>
                <p>
                    In the event of an LPG leak, the vapourisation of liquid cools the atmosphere and condenses the water vapour contained in it to form a whitish fog, which is easy to observe.
                </p>
                <p>
                    LPG in fairly large concentrations displaces oxygen leading to a nauseous or suffocating feeling.
                </p>
                <p>
                    Suraksha LPG hose, flame retardant aprons and energy efficient Green Label stoves are recommended to enhance safety measures while using LPG as fuel.
                </p>
            </div>
            
            <div class="part2">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                        <li data-target="#demo" data-slide-to="3"></li>
                        <li data-target="#demo" data-slide-to="4"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="../Pictures/cylinder%20final.png" alt="Los Angeles" >
                        </div>
                        <div class="carousel-item">
                        <img src="../Pictures/finw.jpg" alt="Chicago" >
                        </div>
                        <div class="carousel-item">
                        <img src="../Pictures/man.jpg" alt="New York" >
                        </div>
                        <div class="carousel-item">
                        <img src="../Pictures/slider2.jpg" alt="New York" >
                        </div>
                        <div class="carousel-item">
                        <img src="../Pictures/slider3.jpg" alt="New York" >
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
            
            <div class="part3">
                <marquee direction="left" behavior="scroll">
                    <img src="../Pictures/pic1.jpeg" alt="">
                    <img src="../Pictures/pic2.jpeg" alt="">
                    <img src="../Pictures/pic3.jpeg" alt="">
                    <img src="../Pictures/pic4.jpeg" alt="">
                </marquee>
            </div>
          </div> <!-- Home Ends -->
          
          <div id="contact_us">
           <div class="contacts">
               <h4>Contact us</h4>
               <p>Our toll free no. is 1800-250-7841 which is available 24x7.</p>
               <p> Our Head Office address is :
                   FUEL CENTRE, 1, Feeder Road, Belgharia, Kolkata, West Bengal 700056</p>
               <p>  Hours Open: </p>
               <p> Monday 10AM-6PM</p>
               <p> Tuesday	10AM–6PM</p>
               <p>Wednesday	10AM–6PM</p>
               <p>Thursday	10AM–6PM</p>
               <p> Friday	10AM–6PM</p>
               <p>Saturday	10AM–6PM</p>
               <p>Sunday	Closed</p>
               <p> Phone : 033 2564 8564, 033 2574 8764</p>
               <p>For any queries, you can write to us at greengascare.co.in</p>
            </div>
            <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>
                    <li data-target="#demo" data-slide-to="4"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="img-fluid" src="../Pictures/indian-family-dinner.jpg" alt="Los Angeles" >
                    </div>
                    <div class="carousel-item">
                    <img class="img-fluid" src="../Pictures/safety.jpg" alt="Chicago" >
                    </div>
                    <div class="carousel-item">
                    <img class="img-fluid" src="../Pictures/gaswrk.png" alt="New York" >
                    </div>
                    <div class="carousel-item">
                    <img class="img-fluid" src="../Pictures/cooking.png" alt="New York" >
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            <div class="contact_us_dealer">
               <h4>Dealer Details</h4>
                <p>Dealer Location </p>
                <p>Dealer contact</p>
                <p>Dealer email id:ggd@fff</p>
            </div>      
         </div> <!-- Contact Us  -->
         
         <div id="faqs">
            <h1>FAQs</h1>
            <h2>Questions/Answers</h2>

            <button class="collapsible">How do  I get a new domestic  5 kg cylinder connection ?</button>
            <div class="content">
                <p>
                Green Gas is available for domestic use generally in 14.2 Kg capacity cylinders and is also available in 5 Kg capacity cylinders in select few cities primarily in hilly / rural areas in the country.
                New LPG Connections are now available on demand across the country. In case you do not have an LPG connection from any of the PSU Oil Companies in your household and you have a separate cooking area in your house you can have an Green Gas domestic connection in your household. For a domestic connection, you can visit the Green Gas website and register for the connection with a valid proof of identity and residence. One of the following documents can be produced for proof of residence: -

                a.	PAN card issued by the Income Tax department
                b.	Aadhaar Letter
                </p>
            </div>

            <button class="collapsible">What do I need to check when I receive my refill ?</button>
            <div class="content">
                <p>
                    Check the seal of the cylinder.
                    Check the safety cap. It should not have any cracks.
                    Remove safety cap and check for leakage of the valve.
                    Pay the cash and update it in your profile.
                </p>
            </div>
            
             <button class="collapsible">What do I need to check when I receive my refill ?</button>
             <div class="content">
                 <p>
                     Check the seal of the cylinder.
                     Check the safety cap. It should not have any cracks.
                     Remove safety cap and check for leakage of the valve.
                     Pay the cash and update it in your profile.
                 </p>
             </div>
             
             <button class="collapsible">What do I need to check when I receive my refill ?</button>
             <div class="content">
                 <p>
                     Check the seal of the cylinder.
                     Check the safety cap. It should not have any cracks.
                     Remove safety cap and check for leakage of the valve.
                     Pay the cash and update it in your profile.
                 </p>
             </div>
             
             <button class="collapsible">What do I need to check when I receive my refill ?</button>
             <div class="content">
                 <p>
                     Check the seal of the cylinder.
                     Check the safety cap. It should not have any cracks.
                     Remove safety cap and check for leakage of the valve.
                     Pay the cash and update it in your profile.
                 </p>
             </div>
             
             <button class="collapsible">What do I need to check when I receive my refill ?</button>
             <div class="content">
                 <p>
                     Check the seal of the cylinder.
                     Check the safety cap. It should not have any cracks.
                     Remove safety cap and check for leakage of the valve.
                     Pay the cash and update it in your profile.
                 </p>
             </div>
             
             <button class="collapsible">What do I need to check when I receive my refill ?</button>
             <div class="content">
                 <p>
                     Check the seal of the cylinder.
                     Check the safety cap. It should not have any cracks.
                     Remove safety cap and check for leakage of the valve.
                     Pay the cash and update it in your profile.
                 </p>
             </div>
        </div> <!-- FAQs Ends -->
            
        </div>
        <!--   BODY ENDS     -->
       
        <!--   FOOTER STARTS    -->
        <footer id="myFooter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <a class="navbar-brand" href="#"> <img src="../Pictures/logo.png" class="img-fluid" alt=""> </a>
                    </div>
                    <div class="col-sm-2">
                        <h5>Get started</h5>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Sign up</a></li>
                            <li><a href="#">Downloads</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2">
                        <h5>About us</h5>
                        <ul>
                            <li><a href="#">Company Information</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Reviews</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2">
                        <h5>Support</h5>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Help desk</a></li>
                            <li><a href="#">Forums</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <div class="social-networks">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                        </div>
                        <div class="social-networks">
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <p>© 2018 Copyright to Green Gas </p>
            </div>
        </footer>
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
        <script src="java.js"></script>
        
    </body>
</html>



