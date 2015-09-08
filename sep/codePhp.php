<?php
	session_start();                    // start the session
	
	//if "email" variable is filled out, send email
  if (isset($_POST['code']) && !empty($_POST['code']))  {
    
	// Create db connection
	require_once __DIR__ . '/db_config.php';
	$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE) or die(mysqli_connect_error());
	
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        echo "failed";
    }

    //check the validity
    $code = $_POST['code'];               //sql injection
	$email = $_SESSION["email"];

    
        $sql = "SELECT code FROM `resetpassword` WHERE email = '".$email."' and code = '".$code."'ORDER BY id DESC LIMIT 1";
        
        $result = mysqli_query($conn,$sql);
        
        if ( mysqli_num_rows($result)>0) {            
            header("location:reset.php");  // if login success head to appointment page
            exit();
        }
        else{		// if password doesnt match
			$message = "Wrong confirmation code.\\nCheck again.";
  echo "<script type='text/javascript'>alert('$message');
	window.location.href='EnterCode.php';
	</script>";
                 
			//header("location:EnterCode.php");  // if login success head to appointment page
        }
        
    

    mysqli_close($conn);
}
  
  //if "code" variable is not filled out, display the form
  else{
	  $message = "Please enter your five digit code.";
  echo "<script type='text/javascript'>alert('$message');
	window.location.href='EnterCode.php';
	</script>";
  }
?>