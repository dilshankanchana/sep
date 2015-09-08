<?php
	session_start();                        // Start the session
	
	
	if (isset($_POST['treatmentCatName']) && !empty($_POST['treatmentCatName']) && 
		isset($_POST['treatment']) && !empty($_POST['treatment']) &&
		isset($_POST['date']) && !empty($_POST['date']) && 
		isset($_POST['selectedTime']) && !empty($_POST['selectedTime'])
		)  {
    // Create db connection
	require_once __DIR__ . '/db_config.php';
	$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE) or die(mysqli_connect_error());
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        echo "failed";
    }

    //check the validity
	$cat = $_POST['treatmentCatName'];
    $name = $_POST['treatment'];    //sql injection
    $date =  $_POST['date'];        //sql injection
	$time =  $_POST['selectedTime'];        //sql injection
	$cusId = $_SESSION["id"];
	
	
	//change the format of date
	$newDate = date("Y-m-d", strtotime($date));
	//substring the time
	$time = substr($time,0,2);
	
	//echo $name ;
    //echo $newDate ;
	//echo $time;
	//echo $_SESSION["id"];
	
		//presql to check availability
		$presql = "SELECT * FROM `appointment` WHERE date = '".$newDate."' and time = '".$time.":00:00'";
      
        //passing query to the database
			$result1 = mysqli_query($conn,$presql);			
			
			//if(!empty($result)){				
                if (mysqli_num_rows($result1) > 0) {
					$message = "Sorry, Time slot is already occupied.";
			echo "<script type='text/javascript'>alert('$message');
				window.location.href='Appintment.php';
				</script>";
				}
				else{
					
	
		//query to get the treatment ID 
		$subSql = "SELECT no FROM `treatment` WHERE tretName = '".$name."'";
            $result_id = mysqli_query($conn,$subSql);
                if (mysqli_num_rows($result_id) > 0) {
				// output data of row
				$row = mysqli_fetch_assoc($result_id);
                    $tretId=$row['no'];
                }
						
		//query to get the cost 
		$subSql = "SELECT cost FROM `treatment` WHERE tretName = '".$name."'";
            $result_id = mysqli_query($conn,$subSql);
                if (mysqli_num_rows($result_id) > 0) {
				// output data of row
				$row = mysqli_fetch_assoc($result_id);
                    $cost=$row['cost'];
                }
				
		//query to insert the appointment 	
        $sql="INSERT INTO `scheduledb`.`appointment` (`appointment_Id`, `customer_Id`, `tretment_Id`, `date`, `time`, `cost`, `status`) 
		VALUES (NULL, '".$cusId."', '".$tretId."', '".$newDate."', '".$time.":00', '".$cost."', '0')";
        
        //$result = mysqli_query($conn,$sql);
        
        if (!mysqli_query($conn,$sql))
            {
                die('Error: ' . mysql_error());
            }
                header("location:Appintment.php");  // if appointment success head to appointment page
            exit(); 

        
    

    mysqli_close($conn);
				}
	}else{
			$message = "Please fill required fields.";
			echo "<script type='text/javascript'>alert('$message');
				window.location.href='Appintment.php';
				</script>";
		}
?>

