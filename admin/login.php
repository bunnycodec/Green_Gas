<?php

// Admin Login

$con = mysqli_connect('localhost', 'root', '', 'greengasdb');
if(!$con)
    echo "Connection Failure, Try Again Later !!";

if(isset($_POST['admin_login']))
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $admin_name = $_POST['username_admin_login'];
        $admin_password = $_POST['password_admin_login'];
        
        if($admin_name == 'Bunny_Codec' && $admin_password == 'greengas')
            echo '<script> alert("Login Successful, Welcome Admin !!"); window.location="admin.php"</script>';
        else
            echo '<script> alert("Sorry, You are Not ADMIN !!"); window.location="../index.php"</script>';
    }
}

// Respond to Cylinder Request
if(isset($_POST['accepting_request']))
{
    if($_SERVER["REQUEST_METHOD"]=="POST")  
    {
        $dealer = $_POST['dealer_id'];
    
        $query = "SELECT * FROM `cylinder_request`";
        $run = mysqli_query($con, $query);
        $count = 5;
        
        while($data = mysqli_fetch_array($run))
        {
            if($data[3]=='Requested')
            {
                $dealer = $data[0];
                $count = $data[2];
                $query = "UPDATE `cylinder_request` SET `Status`='Approved' WHERE `DealerId`=$dealer";
                $run = mysqli_query($con, $query);
                break;
            }
        }
        
        $query = "SELECT * FROM `cylinder`";
        $run = mysqli_query($con, $query);
        $row = mysqli_num_rows($run);
        
        if($row == 0)
        {
            $id = 100;
            $count = $id+$count;
            while($id < $count)
            {
                $query = "INSERT INTO `cylinder`(`CylinderId`, `Status`) VALUES ('$id', 'Available')";
                $run = mysqli_query($con, $query);
                $id = $id+1;
            }

            if($run == TRUE)
                echo '<script> alert("Dealer with ID :'.$dealer.' has been approved for the Cylinder !!"); window.location="admin.php"</script>';
            else
                echo '<script> alert("Server Error, Try Again Later !!"); </script>';
        }
        else
        {
            $query = "SELECT * FROM `cylinder` ORDER BY `CylinderId` DESC LIMIT 1;";
            $run = mysqli_query($con, $query);
            $data = mysqli_fetch_array($run);
            $id = $data[0]+1;
            $count = $id + $count;
            while($id < $count)
            {
                $query = "INSERT INTO `cylinder`(`CylinderId`, `Status`) VALUES ('$id', 'Available')";
                $run = mysqli_query($con, $query);
                $id = $id+1;
            }

            if($run == TRUE)
                echo '<script> alert("Dealer with ID :'.$dealer.' has been approved for the Cylinder !!"); window.location="admin.php"</script>';
            else
                echo '<script> alert("Server Error, Try Again Later !!"); </script>';
        }

    }
}

?>