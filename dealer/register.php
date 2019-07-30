<?php 

$con = mysqli_connect('localhost', 'root', '', 'greengasdb');
if(!$con)
    echo "Connection Failure, Try Again Later !!";

// Dealer Register
if(isset($_POST['dealer_register']))
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $query = "SELECT * FROM `dealer_register`";
        $run = mysqli_query($con, $query);
        $row = mysqli_num_rows($run);
        
        if($row == 0)
            $UserId = 1000;
        else
        {
            $query = "SELECT * FROM `dealer_register` ORDER BY `UserId` DESC LIMIT 1;";
            $run = mysqli_query($con, $query);
            $data = mysqli_fetch_array($run);
            $UserId = $data[0]+1;
        }
        
        $JoiningDate = date("l jS \of F Y h:i:s A");
        $UserName = $_POST['fname']." ".$_POST['lname'];
        $Gender = $_POST['gender'];
        $Email = $_POST['email'];
        $ContactNo = $_POST['contact_number'];
        $DateOfBirth = $_POST['dob'];
        $Address = $_POST['address'];
        $PanCard = $_POST['pan_card'];
        $AadharCard = $_POST['aadhar_card'];
        $State = $_POST['state'];
        $City = $_POST['city'];
        $Zone = $_POST['zone'];
        $Password = $_POST['password'];

        $query = "INSERT INTO `dealer_register`( `UserId`, `JoiningDate`, `Username`, `Gender`, `Email`, `ContactNo`, `DateOfBirth`, `Address`, `PanCard`, `AadharCard`, `State`, `City`, `Zone`, `Password`) VALUES ('$UserId', '$JoiningDate', '$UserName','$Gender','$Email','$ContactNo','$DateOfBirth','$Address','$PanCard','$AadharCard','$State','$City','$Zone','$Password')";

        $run = mysqli_query($con, $query);

        if($run == TRUE)
            echo '<script> alert("Registration Successful, Login to go to Your Profile  Your user Id : '.$UserId.'!!"); window.location="../index.php"</script>';
        else
            echo '<script> alert("Server Error, Try Again Later !!"); window.location="../index.php"</script>';
    }
}

?>