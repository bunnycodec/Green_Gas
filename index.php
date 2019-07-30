<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title> Green Gas </title>
        
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/Footer-with-button-logo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    
    <body>
    
    <?php include 'admin/login.php'; ?>
    <?php include 'dealer/login.php'; ?>
    <?php include 'customer/login.php'; ?>
   
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="#" id="home_nav">Home</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#" id="contact_us_nav">Contact Us</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#" id="faqs_nav">FAQs</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Registration </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#" id="customer_register_nav">Customer Registration</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" id="dealer_register_nav">Dealer Registration</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Login </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#" id="customer_login_nav">Customer Login</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" id="dealer_login_nav">Dealer Login</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" id="admin_login_nav">Admin Login</a>
                        </div>
                    </li>
                </ul>
            </div>
            
            <a class="navbar-brand" href="#"> <img src="Pictures/logo.png" class="img-fluid" alt=""> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"> </span></button>

            <!--      Admin Modal LOGIN BOX      -->
            <div id="admin_login_form" class="modal">
                <form action="admin/login.php" method="POST" class="modal-content animate needs-validation-admin-login" novalidate>
                    <div class="box" style="overflow: hidden;">
                        <img src="Pictures/avatar_admin.png" class="avatar">
                        <img src="Pictures/cross.png" class="avatar_cross">
                        <h1>Admin Login</h1>
                        
                        <div class="form-group">
                            <label for="username_admin_login">Username</label>
                            <input type="text" name="username_admin_login" id="username_admin_login" class="form-control" required>
                            <div class="invalid-feedback">Please enter a valid username.</div>
                        </div>
                        
                        <div class="form-group">
                            <label for="password_admin_login">Password</label>
                            <input type="password" name="password_admin_login" id="password_admin_login" class="form-control" required>
                            <div class="invalid-feedback">Please enter a valid Password.</div>
                        </div>
                        
                        <button type="submit" class="btn btn-outline-success" name="admin_login">Submit</button>
                        
                        <br /><br /><a href="#" class="footer_for_all_form">Lost your password?</a><br>
                        <a href="#" class="footer_for_all_form">Don't have an account?</a>
                    </div>
                </form>
            </div>
            
            <!--      Dealer Modal LOGIN BOX      -->
            <div id="dealer_login_form" class="modal">
                <form action="dealer/login.php" method="POST" class="modal-content animate needs-validation-dealer-login" novalidate>
                    <div class="box" style="overflow: hidden;">
                        <img src="Pictures/avatar_dealer.png" class="avatar">
                        <img src="Pictures/cross.png" class="avatar_cross">
                        <h1>Dealer Login</h1>

                        <div class="form-group">
                            <label for="userid_dealer_login">User ID</label>
                            <input type="text" name="userid_dealer_login" id="userid_dealer_login" class="form-control" required>
                            <div class="invalid-feedback">Please enter a valid username.</div>
                        </div>
                        
                        <div class="form-group">
                            <label for="password_dealer_login">Password</label>
                            <input type="password" name="password_dealer_login" id="password_dealer_login" class="form-control" required>
                            <div class="invalid-feedback">Please enter a valid Password.</div>
                        </div>
                        
                        <button type="submit" class="btn btn-outline-success" name="dealer_login">Submit</button>

                        <br /><br /><a href="#" class="footer_for_all_form">Lost your password?</a><br>
                        <a href="#" class="footer_for_all_form">Don't have an account?</a>
                    </div>
                </form>
            </div>
            
            <!--      Customer Model LOGIN BOX      -->
            <div id="customer_login_form" class="modal">
                <form action="customer/login.php" method="POST" class="modal-content animate needs-validation-customer-login" novalidate>
                    <div class="box" style="overflow: hidden;">
                        <img src="Pictures/avatar_customer.png" class="avatar">
                        <img src="Pictures/cross.png" class="avatar_cross">
                        <h1>Customer Login</h1>

                        <div class="form-group">
                            <label for="userid_customer_login">User ID</label>
                            <input type="text" name="userid_customer_login" id="userid_customer_login" class="form-control" required>
                            <div class="invalid-feedback">Please enter a valid username.</div>
                        </div>
                        
                        <div class="form-group">
                            <label for="password_customer_login">Password</label>
                            <input type="password" name="password_customer_login" id="password_customer_login" class="form-control" required>
                            <div class="invalid-feedback">Please enter a valid Password.</div>
                        </div>
                        
                        <button type="submit" class="btn btn-outline-success" name="customer_login">Submit</button>

                        <br /><br /><a href="#" class="footer_for_all_form">Lost your password?</a><br>
                        <a href="#" class="footer_for_all_form">Don't have an account?</a>
                    </div>
                </form>
            </div> 
            
            <!--      Dealer Modal REGISTER BOX      --> 
            <div id="dealer_register_form" class="modal">
                <form action="dealer/register.php" method="POST" class="modal-content animate needs-validation-dealer-register" novalidate>
                    <div class="box">
                        <img src="Pictures/avatar_dealer.png" class="avatar">
                        <img src="Pictures/cross.png" class="avatar_cross">
                        <h1>Dealer Registration</h1>

                        <div class="row">
                            <div class="col form-group">
                                <label for="fname">First Name</label>
                                <input placeholder="Siddhant" type="text" name="fname" id="fname" class="form-control" required>
                                <div class="invalid-feedback">Please Enter a Valid Name</div> 
                            </div>
                            <div class="col">
                                <label for="lname">Last Name</label>
                                <input placeholder="Roy" type="text" name="lname" id="lname" class="form-control" required>
                                <div class="invalid-feedback">Please Enter a Valid Name</div>
                            </div>
                        </div>
 
                      <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col pt-0">Gender</legend>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                                        <label class="form-check-label" for="male"> Male </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                        <label class="form-check-label" for="female"> Female </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                                        <label class="form-check-label" for="other"> Other </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input placeholder="example@gmail.com" type="text" name="email" id="email" class="form-control" required>
                            <div class="invalid-feedback">Please Enter a Valid Email</div>
                        </div>
                        
                        <div class="form-group">
                            <label for="contact_number">Contact Number</label>
                            <input placeholder="+91 9876543210" type="text" name="contact_number" id="contact_number" class="form-control" required>
                            <div class="invalid-feedback">Please Enter a Valid Contact Number</div>
                        </div>
                        
                       <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input type="date" name="dob" id="dob" class="form-control" required>
                            <div class="invalid-feedback">Please Enter a Valid Date of Birth</div>
                        </div>
                        
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input placeholder="1/42 Your House No" type="text" name="address" id="address" class="form-control" required>
                            <div class="invalid-feedback">Please Enter a Valid Address</div>
                        </div>
                        
                      <div class="form-group">
                            <label for="pan_card">Pan Card Number</label>
                            <input placeholder="ACW156291" type="text" name="pan_card" id="pan_card" class="form-control" required>
                            <div class="invalid-feedback">Please Enter a Valid Pan Number</div>
                        </div>
                        
                        <div class="form-group">
                            <label for="aadhar_card">Aadhar Card Number</label>
                            <input placeholder="1234 5678 9012" type="text" name="aadhar_card" id="aadhar_card" class="form-control" required>
                            <div class="invalid-feedback">Please Enter a Valid Aadhar Number</div>
                        </div>
                        
                       <div class="form-group">
                            <label for="state">State</label>
                            <select name="state" class="form-control">
                                <option>West Bengal</option>
                            </select>
                        </div>
                        
                       <div class="form-group">
                      <label for="city">City</label>
                            <select name="city" id="city" class="form-control">
                                <option>Kolkata</option>
                                <option>Durgapur</option>
                                <option>Asansol</option>
                                <option>Kharagpur</option>
                                <option>Siliguri</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="zone">Zone</label>
                            <select name="zone" id="zone" class="form-control">
                                <option>West</option>
                                <option>East</option>
                                <option>South</option>
                                <option>North</option>
                            </select>
                        </div>
                        
                            <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                            <div class="invalid-feedback">Please Enter a Valid Password</div>
                            <small id="passwordHelpInline" class="text-muted">
                              Must be 8-20 characters long
                            </small>
                        </div>
                        
                   <!--   <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
                            <div class="invalid-feedback">Please Enter a Valid Password</div>
                        </div>
                      
                       <div class="form-group">
                            <label for="file">Upload Your Picture</label>
                            <input type="file" name="file" id="file" class="form-control-file" required>
                            <div class="invalid-feedback">Please Upload a Picture</div>
                            <small id="passwordHelpInline" class="text-muted">
                              Must not be Greater Than 1 MB
                            </small>
                        </div>
-->
                        
                        <button type="submit" class="btn btn-outline-success" name="dealer_register">Submit</button>

                        <br /><br /><a href="#" class="footer_for_all_form">Lost your password?</a><br>
                        <a href="#" class="footer_for_all_form">Don't have an account?</a>
                    </div>
                </form>
            </div> 
            
            <!--      Customer Modal REGISTER BOX      -->
            <div id="customer_register_form" class="modal">
                <form action="customer/register.php" method="POST" class="modal-content animate needs-validation-customer-register" novalidate>
                    <div class="box">
                        <img src="Pictures/avatar_customer.png" class="avatar">
                        <img src="Pictures/cross.png" class="avatar_cross">
                        <h1>Customer Registration</h1>

                           <div class="row">
                            <div class="col form-group">
                                <label for="fname2">First Name</label>
                                <input placeholder="Siddhant" type="text" name="fname2" id="fname2" class="form-control" required>
                                <div class="invalid-feedback">Please Enter a Valid Name</div> 
                            </div>
                            <div class="col">
                                <label for="lname2">Last Name</label>
                                <input placeholder="Roy" type="text" name="lname2" id="lname2" class="form-control" required>
                                <div class="invalid-feedback">Please Enter a Valid Name</div>
                            </div>
                        </div>
                        
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col pt-0">Gender</legend>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender2" id="male2" value="male" checked>
                                        <label class="form-check-label" for="male2"> Male </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender2" id="female2" value="female">
                                        <label class="form-check-label" for="female2"> Female </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <input class="form-check-input" type="radio" name="gender2" id="other2" value="other">
                                        <label class="form-check-label" for="other2"> Other </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        
                        <div class="form-group">
                            <label for="email2">Email</label>
                            <input placeholder="example@gmail.com" type="text" name="email2" id="email2" class="form-control" required>
                            <div class="invalid-feedback">Please Enter a Valid Email</div>
                        </div>
                        
                        <div class="form-group">
                            <label for="contact_number2">Contact Number</label>
                            <input placeholder="+91 9876543210" type="text" name="contact_number2" id="contact_number2" class="form-control" required>
                            <div class="invalid-feedback">Please Enter a Valid Contact Number</div>
                        </div>
                        
                        <div class="form-group">
                            <label for="dob2">Date of Birth</label>
                            <input type="date" name="dob2" id="dob2" class="form-control" required>
                            <div class="invalid-feedback">Please Enter a Valid Date of Birth</div>
                        </div>
                        
                        <div class="form-group">
                            <label for="address2">Address</label>
                            <input placeholder="1/42 Your House No" type="text" name="address2" id="address2" class="form-control" required>
                            <div class="invalid-feedback">Please Enter a Valid Address</div>
                        </div>
                        
                        <div class="form-group">
                            <label for="pan_card2">Pan Card Number</label>
                            <input placeholder="ACW156291" type="text" name="pan_card2" id="pan_card2" class="form-control" required>
                            <div class="invalid-feedback">Please Enter a Valid Pan Number</div>
                        </div>
                        
                        <div class="form-group">
                            <label for="aadhar_card2">Aadhar Card Number</label>
                            <input placeholder="1234 5678 9012" type="text" name="aadhar_card2" id="aadhar_card2" class="form-control" required>
                            <div class="invalid-feedback">Please Enter a Valid Aadhar Number</div>
                        </div>
                        
                        <div class="form-group">
                            <label for="state2">State</label>
                            <select name="state2" id="state2" class="form-control">
                                <option>West Bengal</option>
                            </select>
                        </div>
                      
                        <div class="form-group">
                      <label for="city2">City</label>
                            <select name="city2" id="city2" class="form-control">
                                <option>Kolkata</option>
                                <option>Durgapur</option>
                                <option>Asansol</option>
                                <option>Kharagpur</option>
                                <option>Siliguri</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="zone2">Zone</label>
                            <select name="zone2" id="zone2" class="form-control">
                                <option>West</option>
                                <option>East</option>
                                <option>South</option>
                                <option>North</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="password2">Password</label>
                            <input type="password" name="password2" id="password2" class="form-control" required>
                            <div class="invalid-feedback">Please Enter a Valid Password</div>
                            <small id="passwordHelpInline" class="text-muted">
                              Must be 8-20 characters long
                            </small>
                        </div>
                       
                       <!-- <div class="form-group">
                            <label for="confirm_password2">Confirm Password</label>
                            <input type="password" name="confirm_password2" id="confirm_password2" class="form-control" required>
                            <div class="invalid-feedback">Please Enter a Valid Password</div>
                        </div>
                        
                        <div class="form-group">
                            <label for="file2">Upload Your Picture</label>
                            <input type="file" name="file2" id="file2" class="form-control-file" required>
                            <div class="invalid-feedback">Please Upload a Picture</div>
                            <small id="passwordHelpInline" class="text-muted">
                              Must not be Greater Than 1 MB
                            </small>
                        </div>
                        -->
                        
                        <button type="submit" class="btn btn-outline-success" name="customer_register">Submit</button>

                        <br /><br /><a href="#" class="footer_for_all_form">Lost your password?</a><br>
                        <a href="#" class="footer_for_all_form">Don't have an account?</a>
                    </div>
                </form>
            </div> 
        </nav>
        
        <!--    BODY PART     -->
        <div class="main">
         
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
                        <img src="Pictures/cylinder%20final.png" alt="Los Angeles" >
                        </div>
                        <div class="carousel-item">
                        <img src="Pictures/finw.jpg" alt="Chicago" >
                        </div>
                        <div class="carousel-item">
                        <img src="Pictures/man.jpg" alt="New York" >
                        </div>
                        <div class="carousel-item">
                        <img src="Pictures/slider2.jpg" alt="New York" >
                        </div>
                        <div class="carousel-item">
                        <img src="Pictures/slider3.jpg" alt="New York" >
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
                    <img src="Pictures/pic1.jpeg" alt="">
                    <img src="Pictures/pic2.jpeg" alt="">
                    <img src="Pictures/pic3.jpeg" alt="">
                    <img src="Pictures/pic4.jpeg" alt="">
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
                    <img class="img-fluid" src="Pictures/indian-family-dinner.jpg" alt="Los Angeles" >
                    </div>
                    <div class="carousel-item">
                    <img class="img-fluid" src="Pictures/safety.jpg" alt="Chicago" >
                    </div>
                    <div class="carousel-item">
                    <img class="img-fluid" src="Pictures/gaswrk.png" alt="New York" >
                    </div>
                    <div class="carousel-item">
                    <img class="img-fluid" src="Pictures/cooking.png" alt="New York" >
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
            
            <div style="width:57%; height:33vh; margin-top: 10px;"> </div>
            <iframe id="map" style="width:57%; height:40vh; margin-top: 8px;" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyASDHiH7_Ahj_SIP2ijsrWRKegx1GZb7Vc&q=FUEL CENTRE, 1, Feeder Road, Belgharia, Kolkata, West Bengal 700056" allowfullscreen></iframe>
                  
         </div> <!-- About Us  -->
         
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
          
        </div> <!-- MAIN ENDS -->
        
        
        <!--   FOOTER STARTS    -->
        <footer id="myFooter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <a class="navbar-brand" href="#"> <img src="Pictures/logo.png" class="img-fluid" alt=""> </a>
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
                            <li><a href="#">FAQs</a></li>
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
        <script src="form_validation.js"></script>
        <script>
            
            var coll = document.getElementsByClassName("collapsible");
            var i;

            for (i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.display === "block") {
                        content.style.display = "none";
                    } else {
                        content.style.display = "block";
                    }
                });
            }
            
        </script>
        
    </body>
</html>


