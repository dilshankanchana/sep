<?php
	session_start();                        // Start the session
	
//if "email" variable is filled out, send email
  if (isset($_POST['email']) && !empty($_POST['email']))  {
	  
	  $code = rand(10000,100000);
	  $comment = "Hi,\r\nYou have recently asked to reset your account password.\n
Please enter the following password reset code :".$code."\nThank you!";
	  
		
  //Email information
  $admin_email = "chamilmadawa8@gmail.com";
  $email = $_POST['email'];
  $subject =  "Requesting a new password";
  
  $time = time();
  
	// Create db connection
	require_once __DIR__ . '/db_config.php';
	$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE) or die(mysqli_connect_error());
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        echo "failed";
    }
	
	//query to insert the appointment 	
        $sql="INSERT INTO `scheduledb`.`resetpassword` (`id`, `email`, `code`) VALUES (NULL, '".$email."', '".$code."')";
        
        
        if (!mysqli_query($conn,$sql))
            {
                die('Error: ' . mysql_error());
            }
				session_start();                    // start the session
				$_SESSION["email"] = $email;          // set name as session variable
                header("location:EnterCode.php");  // if appointment success head to appointment page
            exit(); 

        
    

    mysqli_close($conn);
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  /*else{
	  $message = "Please enter your email.";
  echo "<script type='text/javascript'>alert('$message');
	window.location.href='forgot.php';
	</script>";
  }*/
  
?>