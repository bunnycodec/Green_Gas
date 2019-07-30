<?php

$con = mysqli_connect('localhost', 'root', '', 'greengasdb');
if(!$con)
    echo "Connection Failure, Try Again Later !!";

// Customer Login

if(isset($_POST['customer_login']))
{
    if($_SERVER["REQUEST_METHOD"]=="POST")  
    {
        $customer_userid = $_POST['userid_customer_login'];
        $customer_password = $_POST['password_customer_login'];

        $query = "SELECT * FROM `customer_register` WHERE UserId2='$customer_userid' AND Password2='$customer_password'"; 

        $run = mysqli_query($con,$query);
        $row = mysqli_num_rows($run);

        if($row > 0)
            echo '<script> alert("Login Successful !!"); window.location="customer.php"</script>';
        else
            echo '<script> alert("Sorry Wrong Password or Username, Try Again !!"); window.location="../index.php"</script>';
    }
}

// Booking Cylinder
if(isset($_POST['cust_booking']))
{
    if($_SERVER["REQUEST_METHOD"]=="POST")  
    {
        $customer_id = $_POST['cust_id'];
        $customer_name = $_POST['cust_name'];
        $customer_date = date("Y-m-d");
        
        if($customer_id < 4999)
        {
            echo '<script> alert("Booking Rejected !! Wrong User ID !!");  window.location="customer.php"</script>';
            exit();
        }
        
        $query = "INSERT INTO `booking`(`CustomerId`, `CustomerName`, `BookingDate`, `Status`) VALUES ('$customer_id', '$customer_name', '$customer_date', 'Requested')";
        
        $run = mysqli_query($con, $query);
        
        if($run == TRUE)
            echo '<script> alert("Booking Successfull !! Your Booking Has Been Accepted !!");  window.location="customer.php"</script>';
        else
            echo '<script> alert("Server Error, Try Again Later !!"); </script>';
    }
}


?>