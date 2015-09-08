<?php

    // Create connection    
	require_once __DIR__ . '/db_config.php';
	$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE) or die(mysqli_connect_error());
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        echo "failed";
    }

    //check the validity
    $email = $_POST['email'];               //sql injection
    $password =  $_POST['password'];        //sql injection
	$salt = null;

        $presql = "select salt from customer where customer.email = '".$email."'";      // get the salt value from db from email
        $result1 = mysqli_query($conn,$presql);
        if ( mysqli_num_rows($result1)>0) {
            $row = mysqli_fetch_assoc($result1);
            $salt = $row['salt'];
        }
		
    $presql = "select id,firstName from customer where customer.email = '".$email."'";         // get user name to use as session variable   
        $result2 = mysqli_query($conn,$presql);
        if ( mysqli_num_rows($result2)>0) {
            $row = mysqli_fetch_assoc($result2);
            $Name = $row['firstName'];
			$Id	=	$row['id'];
        }
		
        
    $password = md5($password+$salt);           // decrypt password
    
        $sql1 = "select email, password from customer where customer.email = '".$email."' AND customer.password = '".$password."'"; 
        
        $result3 = mysqli_query($conn,$sql1);
        
        if ( mysqli_num_rows($result3)>0) {
            session_start();                    // start the session
            $_SESSION["name"] = $Name;          // set name as session variable
			$_SESSION["id"] = $Id;          // set id as session variable
            header("location:Appintment.php");  // if login success head to appointment page
            exit();
        }
        else{		// if password doesnt match
			$message = "Email and Password mismatch.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');
	window.location.href='login.php';
	</script>";
                 
			//header("location:login.php");  // if login success head to appointment page
        }
        
    

    mysqli_close($conn);
?>