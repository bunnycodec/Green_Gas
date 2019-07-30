<?php 

$con = mysqli_connect('localhost', 'root', '', 'greengasdb');
if(!$con)
    echo "Connection Failure, Try Again Later !!";

// Dealer Login

if(isset($_POST['dealer_login']))
{
    if($_SERVER["REQUEST_METHOD"]=="POST")  
    {
        $dealer_userid = $_POST['userid_dealer_login'];
        $dealer_password = $_POST['password_dealer_login'];

        $query = "SELECT * FROM `dealer_register` WHERE UserId='$dealer_userid' AND Password='$dealer_password'"; 

        $run = mysqli_query($con, $query);
        $row = mysqli_num_rows($run);

        if($row > 0)
        {
            $data = mysqli_fetch_array($run);
            $name = $data[0];
            
            session_start();
            $_SESSION['did'] = $name;
            
            echo '<script> alert("Login Successful !!"); window.location="dealer.php"</script>';
        }
        else
            echo '<script> alert("Sorry Wrong Password or Username, Try Again !!"); window.location="../index.php"</script>';
    }
}

// Providing Cylinder IDs
$flag=0;

if(isset($_POST['dealer_providing_id']))
{
    if($_SERVER["REQUEST_METHOD"]=="POST")  
    {
        $cust_id = $_POST['cust_id'];
        $dealer_date = date("Y-m-d");
        $query = "SELECT * FROM `booking` WHERE `CustomerId`=$cust_id;";
        $run = mysqli_query($con, $query);
        $data = mysqli_fetch_array($run);
        
        if($data[4]<5000 && $data[4]!=null)
        {
            echo '<script> alert("Wrong User ID !!");  window.location="dealer.php"</script>';
            exit();
        }
        
        $query = "SELECT * FROM `cylinder`;";
        $run = mysqli_query($con, $query);
        $row = mysqli_num_rows($run);
        
        if($row == 0)
        {
            echo '<script> alert("You are Out of cylinder, Kindly Request More cylinder from Admin !!");  window.location="dealer.php"</script>';
            exit();
        }
            // Checking for Availability
        while($data = mysqli_fetch_array($run))
        {
            if($data[1]=='Available')
            {
                $flag = 1;
                $cyliderId = $data[0];
                $query = "UPDATE `cylinder` SET `Status`='Unavailable' WHERE `CylinderId`=$cyliderId";
                $run = mysqli_query($con, $query);
                break;
            }
        }

        if($flag!=1)
           echo '<script> alert("You are Out of cylinder, Kindly Request More cylinder from Admin !!");  window.location="dealer.php"</script>'; 
        else
        {
            $query = "UPDATE `booking` SET `DeliveryDate`='$dealer_date', `CylinderId`='$cyliderId', `Status`='Delivered' WHERE `CustomerId`=$cust_id;";
            $run = mysqli_query($con, $query);

            if($run == TRUE)
                echo '<script> alert("Sending Successfull !! Customer Will be Notified Soon !!");  window.location="dealer.php"</script>';
            else
                echo '<script> alert("Server Error, Try Again Later !!"); </script>';
        }
    }
}

// Requesting Cylinder
if(isset($_POST['request_cylinder']))
{
    if($_SERVER["REQUEST_METHOD"]=="POST")  
    {
        $dealerId = $_POST['dealer_id'];
        $dealerName = $_POST['dealer_name'];
        $cylinderAmount = $_POST['cylinder_amount'];
        
        $query = "INSERT INTO `cylinder_request`(`DealerId`, `DealerName`, `CylinderAmount`, `Status`) VALUES ('$dealerId', '$dealerName', '$cylinderAmount', 'Requested')";
        
        $run = mysqli_query($con, $query);

        if($run == TRUE)
            echo '<script> alert("Your Request for Cylinder Has Been Send to the Admin. \n Request Successfull !!"); window.location="dealer.php"</script>';
        else
            echo '<script> alert("Server Error, Try Again Later !!"); window.location="dealer.php"</script>';
    }
}

?>