<?php 
session_start();
if(!$_SESSION['did'])
    header('location: ../index.php');

$con = mysqli_connect('localhost', 'root', '', 'greengasdb');
if(!$con)
    echo "Connection Failure, Try Again Later !!";

function showRequests()
{
    global $con;
    $query = "SELECT * FROM `cylinder_request`";
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Admin Profile </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#" id="update_profile_nav">Update Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" id="dealer_requests_nav">Dealer Requests</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../index.php" id="log_out_nav">Log Out</a>
                        </div>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="#"></a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#"></a> </li>
                    <h3 style="color: white; margin: auto;"> Welcome Admin </h3>
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
                            <p>Name</p>
                            <p> Customer ID </p>
                            <p> Date of Birth </p>
                            <p> Aadhar Card </p>
                            <p> Pan Card </p>
                            <p> Marital Status </p>
                            <p> Gender </p>
                            <p> Email ID </p>
                            <p> Contact No </p>
                            <p> Address </p>
                            <p> Address </p>
                            <p> City </p>
                            <p> Zone </p>
                            <p> State </p>
                        </div>

                        <div class="col-md-4">
                            <p> Sunny Kumar</p>
                            <p> CST0123 </p>
                            <p> 23/09/1993 </p>
                            <p> 2345 2346 6575 </p>
                            <p> HYSG 342 345234 </p>
                            <p> Unmarried </p>
                            <p> Male </p>
                            <p> example@gmail.com </p>
                            <p> +91 7111111111 </p>
                            <p> 1/32 MG Lane Sarani, Kolkata </p>
                            <p> 700039 </p>
                            <p> Kolkata </p>
                            <p> Eastern Zone </p>
                            <p> West Bengal </p>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- Profile Ends -->

            <!--  Customer Starts  -->
            <div id="customer">
                <div class="container">
                    <h1> Customer Details </h1>
                    
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Customer ID">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <br />
                    <button style="color: black;" type="button" class="refresh btn btn-outline-success"> Refresh List &nbsp;<i class="fa fa-refresh"></i></button>
                    <br /><br />
                    
                    <table class="w3-table-all" id="booking_table">
                        <thead>
                            <tr class="w3-red">
                                <th>Customer ID</th>
                                <th>Customer Name</th>
                                <th>Last Booking Date</th>
                                <th>Last Delivery Date</th>
                                <th>Profile</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>CST54321</td>
                            <td>Sunny Kumar</td>
                            <td>12/06/2018</td>
                            <td>15/06/2018</td>
                            <td><button type="button" class="btn btn-info"> Profile </button></td>
                            <td><button type="button" class="btn btn-danger"> Delete </button></td>
                        </tr>
                        <tr>
                            <td>CST54321</td>
                            <td>Sunny Kumar</td>
                            <td>12/06/2018</td>
                            <td>15/06/2018</td>
                            <td><button type="button" class="btn btn-info"> Profile </button></td>
                            <td><button type="button" class="btn btn-danger"> Delete </button></td>
                        </tr>
                        <tr>
                            <td>CST54321</td>
                            <td>Sunny Kumar</td>
                            <td>12/06/2018</td>
                            <td>15/06/2018</td>
                            <td><button type="button" class="btn btn-info"> Profile </button></td>
                            <td><button type="button" class="btn btn-danger"> Delete </button></td>
                        </tr>
                    </table>
                </div>
            </div>
            <!--  Customer Ends  -->   
            
            <!--  Dealer Starts  -->
            <div id="dealer">
                <div class="container">
                    <h1> Dealer Details </h1>

                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Dealer ID">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <br />
                    <button style="color: black;" type="button" class="refresh btn btn-outline-success"> Refresh List &nbsp;<i class="fa fa-refresh"></i></button>
                    <br /><br />

                    <table class="w3-table-all" id="booking_table">
                        <thead>
                            <tr class="w3-red">
                                <th>Dealer ID</th>
                                <th>Dealer Name</th>
                                <th>Contact Number</th>
                                <th>State, City, Zone</th>
                                <th>Profile</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>DLGG54321</td>
                            <td>Sunny Kumar</td>
                            <td>+91 9876543210</td>
                            <td>Maharashtra, Mumbai, North</td>
                            <td><button type="button" class="btn btn-info"> Profile </button></td>
                            <td><button type="button" class="btn btn-danger"> Delete </button></td>
                        </tr>
                        <tr>
                            <td>DLGG54321</td>
                            <td>Sunny Kumar</td>
                            <td>+91 9876543210</td>
                            <td>Maharashtra, Mumbai, North</td>
                            <td><button type="button" class="btn btn-info"> Profile </button></td>
                            <td><button type="button" class="btn btn-danger"> Delete </button></td>
                        </tr>
                        <tr>
                            <td>DLGG54321</td>
                            <td>Sunny Kumar</td>
                            <td>+91 9876543210</td>
                            <td>Maharashtra, Mumbai, North</td>
                            <td><button type="button" class="btn btn-info"> Profile </button></td>
                            <td><button type="button" class="btn btn-danger"> Delete </button></td>
                        </tr>
                    </table>
                </div>
            </div>
            <!--  Dealer Ends  -->  
            
            <!--  Dealer Requests Starts  -->
            <div id="dealer_requests">
                <div class="container">
                    <h1> Dealer Requests for Cylinder </h1>
                    <br />
                    <table class="w3-table-all" id="booking_table">
                        <thead>
                            <tr class="w3-red">
                                <th>Dealer ID</th>
                                <th>Dealer Name</th>
                                <th>Cylinder Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <?php showRequests(); ?>
                    </table>
                    <br>
                    <form action="login.php" method="POST">
                        <input type="text" placeholder="Dealer ID" name="dealer_id"><br />
                        <input type="submit" name="accepting_request" class="btn btn-primary" style="font-size: 2vh; width: 15vh;" value="APPROVE">
                    </form>
                </div>
            </div>
            <!--  Dealer Ends  --> 

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
        <script>
   
    </body>
</html>


