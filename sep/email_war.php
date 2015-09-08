<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
$q = $_GET['email'];
    // Create db connection
	require_once __DIR__ . '/db_config.php';
	$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE) or die(mysqli_connect_error());
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        echo "failed";
    }

    //query to check email validity
        $sql1 = "select email from customer where customer.email = '".$q."'";
        
        $result1 = mysqli_query($conn,$sql1);
        if(mysqli_query($conn,$sql1)){
        if ( mysqli_num_rows($result1)>0) {
			echo '<input  id ="sub" type="submit" class="btn btn-default" disabled>  ';
            echo '<label id="emailNotify" value = "0" style = "color: #DA0707;"> Sorry, User already exists.</label>';
			
            
        }else{
			echo '<input  id ="sub" type="submit" class="btn btn-default" >';
		}
		
		}
		else{
			echo "sql fail";
		}


mysqli_close($conn);
?>
</body>
</html>