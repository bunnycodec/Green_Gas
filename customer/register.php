<?php

$con = mysqli_connect('localhost', 'root', '', 'greengasdb');
if(!$con)
    echo "Connection Failure, Try Again Later !!";

// Customer Register

if(isset($_POST['customer_register']))
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $query = "SELECT * FROM `customer_register`";
        $run = mysqli_query($con, $query);
        $row = mysqli_num_rows($run);
        
        if($row == 0)
            $UserId2 = 5000;
        else
        {
            $query = "SELECT * FROM `customer_register` ORDER BY `UserId2` DESC LIMIT 1;";
            $run = mysqli_query($con, $query);
            $data = mysqli_fetch_array($run);
            $UserId2 = $data[0]+1;
        }
        
        $JoiningDate2 = date("l jS \of F Y h:i:s A");
        $UserName2 = $_POST['fname2']." ".$_POST['lname2'];
        $Gender2 = $_POST['gender2'];
        $Email2 = $_POST['email2'];
        $ContactNo2 = $_POST['contact_number2'];
        $DateOfBirth2= $_POST['dob2'];
        $Address2= $_POST['address2'];
        $PanCard2= $_POST['pan_card2'];
        $AadharCard2= $_POST['aadhar_card2'];
        $State2 = $_POST['state2'];
        $City2 = $_POST['city2'];
        $Zone2 = $_POST['zone2'];
        $Password2 = $_POST['password2'];
        
        $query = "INSERT INTO `customer_register`(`UserId2`, `JoiningDate2`, `Username2`, `Gender2`, `Email2`, `ContactNo2`, `DateOfBirth2`, `Address2`, `PanCard2`, `AadharCard2`, `State2`, `City2`, `Zone2`, `Password2`) VALUES ('$UserId2', '$JoiningDate2', '$UserName2','$Gender2','$Email2','$ContactNo2','$DateOfBirth2','$Address2','$PanCard2','$AadharCard2','$State2','$City2','$Zone2','$Password2')";

        $run = mysqli_query($con, $query);

        if($run == TRUE)
            echo '<script> alert("Registration Successful, Login to go to Your Profile  Your user Id : '.$UserId2.'!!"); window.location="../index.php"</script>';
        else
            echo '<script> alert("Server Error, Try Again Later !!"); window.location="../index.php"</script>';
    }
}

?>