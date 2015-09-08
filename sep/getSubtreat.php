<html>
<head>

</head>
<body>
<?php
	//session_start();                        // Start the session

	$q = $_GET['q'];
    require_once __DIR__ . '/db_config.php';
	$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE) or die(mysqli_connect_error());
    
    if (!$conn) {       // Check connection
        die("Connection failed: " . mysqli_connect_error());
        echo "failed";
                }
		
		
		//presql query to find the id of category
		/*$presql = "SELECT * FROM `main_category` WHERE cat_name = '".$q."'";
		$result1 = mysqli_query($conn,$presql);
		
		if (mysqli_num_rows($result1) > 0) {
				// output data of row	
				$row = mysqli_fetch_array($result1);
					$Id	=	$row['id'];
								
				
                }
				else
					echo "Id error";*/
		
         //query to update data customer table   
		 $sql = "SELECT tretName FROM `treatment` WHERE main_cat_id = ".$q;
       
        //passing query to the database
			$result = mysqli_query($conn,$sql);			
			echo '<datalist id="treatment">';
			//if(!empty($result)){				
                if (mysqli_num_rows($result) > 0) {
				// output data of row		
						
				while($row = mysqli_fetch_array($result)){					
					echo '<option value = "'.$row['tretName'].'">';   //place options foreach
								
				}
                }
			
			echo '</datalist>';
			//}
			//else{
				//echo "it is empty";
			//}
    mysqli_close($conn);    //closs the connection
		
?>
</body>
</html>