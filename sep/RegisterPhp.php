<?php
    
	//if form variables are uncompletely filled out, send email
	if (isset($_POST['firstName']) && !empty($_POST['firstName']) && 
		isset($_POST['lastName']) && !empty($_POST['lastName']) &&
		isset($_POST['email']) && !empty($_POST['email']) && 
		isset($_POST['password']) && !empty($_POST['password']) && 
		isset($_POST['contactNo']) && !empty($_POST['contactNo']) && 
		isset($_POST['age']) && !empty($_POST['age']) && 
		isset($_POST['address']) && !empty($_POST['address']))  {
    
	// Create db connection
	require_once __DIR__ . '/db_config.php';
	$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE) or die(mysqli_connect_error());
	
    
    if (!$conn) {       // Check connection
        die("Connection failed: " . mysqli_connect_error());
        echo "failed";
                }

    //check the validity
    $password = $_POST['password'];      //sql injection
    
        
        $salt = rand(10000000,1000000000000);       // encrypt password
        $password = md5($password + $salt);         // Add salt to password

         //query to insert data customer table   
         $sql = "INSERT INTO `scheduledb`.`customer` (`id`, `firstName`, `lastName`, `email`, `password`, `contact_no`, `age`, `address`, `salt`) VALUES 
		 (NULL,'".$_POST['firstName']."','".$_POST['lastName']."','".$_POST['email']."','".$password."','".$_POST['contactNo']."','".$_POST['age']."','".$_POST['address']."','".$salt."')";
   
	
                                                                        //passing query to the database
			if (!mysqli_query($conn,$sql))
            {
				echo mysql_error();
                die('Error: ' . mysql_error());    // if an error occur
            }else
                header("location:login.php");  // if the query success, direct the page to login.php file
               
    mysqli_close($conn);    //closs the connection
		}else{
			$message = "Please fill required fields.";
			echo "<script type='text/javascript'>alert('$message');
				window.location.href='Register.php';
				</script>";
		}
?>