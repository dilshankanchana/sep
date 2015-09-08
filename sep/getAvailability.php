<html>
<head>

</head>
<body>
<?php
	//session_start();                        // Start the session

	$date = $_GET['date'];
	$time = $_GET['time'];
	
	//change the format of date
	$date = date("Y-m-d", strtotime($date));
	//substring the time
	$time = substr($time,0,2);
	
	
    require_once __DIR__ . '/db_config.php';
	$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE) or die(mysqli_connect_error());
    
    if (!$conn) {       // Check connection
        die("Connection failed: " . mysqli_connect_error());
        echo "failed";
                }
		
		
		//presql query to find the id of category
		
		
         //query to update data customer table   
		 $sql = "SELECT * FROM `appointment` WHERE date = '".$date."' and time = '".$time.":00:00'";
      
        //passing query to the database
			$result = mysqli_query($conn,$sql);			
			
			//if(!empty($result)){				
                if (mysqli_num_rows($result) > 0) {
				// output data of row																
					echo '<p style="color: #DA0707;">Time slot not available</p>';   //place options foreach							
				
                }
			
			
			else{
				echo '<p style="color: #07DA4F;" >Available</p>'; 
			}
    mysqli_close($conn);    //closs the connection
		
?>
</body>
</html>