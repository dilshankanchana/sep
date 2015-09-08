<?php
	session_start();                        // Start the session

	//if form variables are uncompletely filled out, send email
	if (isset($_POST['fname']) && isset($_POST['lname']) && 
		isset($_POST['email']) && isset($_POST['mobile']) &&  
		isset($_POST['age']) && isset($_POST['address']) )  {
    
	// Create db connection
	require_once __DIR__ . '/db_config.php';
	$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE) or die(mysqli_connect_error());
    
    if (!$conn) {       // Check connection
        die("Connection failed: " . mysqli_connect_error());
        echo "failed";
                }


         //query to update data customer table   
		 $sql = "UPDATE `customer` SET `firstName`='".$_POST['fname']."',`lastName`='".$_POST['lname']."',`email`='".$_POST['email']."',
		 `contact_no`='".$_POST['mobile']."',`age`='".$_POST['age']."',`address`='".$_POST['address']."' WHERE `id`=".$_SESSION["id"];
        
                                                                        //passing query to the database
			if (!mysqli_query($conn,$sql))
            {
                die('Error: ' . mysql_error());    // if an error occur
            }else{
                // if the query success, direct the page to appointment.php file
				$message = "Successfully updated.";
				echo "<script type='text/javascript'>alert('$message');
				window.location.href='appintment.php';
				</script>";
			}
               
    mysqli_close($conn);    //closs the connection
		}else{
			$message = "Please fill required fields.";
			echo "<script type='text/javascript'>alert('$message');
				window.location.href='edit.php';
				</script>";
		}
?>