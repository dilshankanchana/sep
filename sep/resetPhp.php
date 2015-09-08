<?php
	session_start();                    // start the session
	
	//if "email" variable is filled out, send email
  if (isset($_POST['pwd12']) && !empty($_POST['pwd12']) && isset($_POST['pwd22']) && !empty($_POST['pwd22']))  {
	  
    // Create db connection
	require_once __DIR__ . '/db_config.php';
	$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE) or die(mysqli_connect_error());
	
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        echo "failed";
    }

    //check the validity
    $pwd = $_POST['pwd12'];               //sql injection
	$email = $_SESSION["email"];
	
		$salt = rand(10000000,1000000000000);       // encrypt password
        $password = md5($pwd + $salt);         // Add salt to password

    
        $sql = "UPDATE `customer` SET `password`='".$password."',`salt`='".$salt."'  WHERE email = '".$email."'";
        
        
        if (!mysqli_query($conn,$sql))
            {
                die('Error: ' . mysql_error());
            }
                header("location:Login.php");  // if appointment success head to appointment page
            exit(); 
        
    

    mysqli_close($conn);
}
  
  //if "code" variable is not filled out, display the form
  
?>