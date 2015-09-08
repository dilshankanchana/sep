<?php
	session_start();                        // Start the session
	
//if  variables are filled out, send email
  	if (isset($_POST['name']) && !empty($_POST['name']) && 
		isset($_POST['message']) && !empty($_POST['message']) &&
		isset($_POST['email']) && !empty($_POST['email']) && 
		isset($_POST['subject']) && !empty($_POST['subject'])	
		)  {
	  
		
  //Email information
  $senders_email = $_POST['email'];
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $message	=	$_POST['message'];
  $ownersEmail = "chamilmadawa8@gmail.com";
    
  //send email
  mail($senders_email, "$subject", $message, "From:".$ownersEmail);
  
  //Email response
	$message1 = "Successfully received.";
  echo "<script type='text/javascript'>alert('$message1');
	window.location.href='index.php';
	</script>";
  }
  
  //if variables are not filled out, display the form
  else{
	  $message = "Please fill required fields.";
  echo "<script type='text/javascript'>alert('$message');
	window.location.href='contact.php';
	</script>";
  }
  
?>