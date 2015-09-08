<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
	session_start();                        // Start the session
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Priya Esthetics</title>                                                      <!--title of the site-->
<meta name="keywords" content="" />
<meta name="description" content="" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="default.css" rel="stylesheet" type="text/css" media="all" />            <!-- set css files-->

</head>
<script type="text/javascript">
function showUser(str)
{
if (str=="")
	{
	document.getElementById("emailId").innerHTML="";
	return;
	}
if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari

	xmlhttp=new XMLHttpRequest();
	}
else
	{// code for IE6, IE5

	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
xmlhttp.onreadystatechange=function()
{
	if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("emailId").innerHTML=xmlhttp.responseText;
		}
}
	xmlhttp.open("GET","check_password.php?q="+str,true);

	xmlhttp.send();
}
</script>

<script type="text/javascript">
		function pass()
		{
			var pwd=document.getElementById("password").value;
			var cpwd=document.getElementById("confirmpassword").value;
			if(pwd==cpwd)
				{
				var t1=document.getElementById('pass').innerHTML="Password Match";
				/*t1.style.display='block';*/
		}
		else
		{
			var t1=document.getElementById('pass').innerHTML="Password does not Match";
			/* t1.style.display='block';*/
			document.form.password.focus();
			}
		}
</script>

<body>
<div id="wrapper">
	<div id="menu-wrapper">
		<div id="menu" class="container">
			<ul>                                                               <!-- top selection tab-->  
				<li><a href="index.php">Home</a></li>
				<li><a href="Services.php">Services</a></li>
				<li><a href="facial.php">Facial Treatments</a></li>
				<li><a href="Login.php">Appointments</a></li>
				<li><a href="quo.php">Quotation</a></li> 
                <li><a href="contact.php">contact</a></li>
			</ul>
		</div>
		<!-- end #menu --> 
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">Priya Esthetics</a></h1>                        <!-- heading-->
				<p>Your Skin Deserves More </p>
			</div>
		</div>
	</div></div>
	

<!--<div class="container">-->
    
    <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">                           <!-- member login form-->
                        <div class="panel-heading">
                            About
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form  action="editPhp.php" method="post">     <!-- php use to connect with db-->
                                        <div class="form-group">
										
											<?php
											// Create db connection
											require_once __DIR__ . '/db_config.php';
												$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE) or die(mysqli_connect_error());
												// Check connection
												if (!$conn) {
													die("Connection failed: " . mysqli_connect_error());
													echo "failed";
												}
											$sql = "SELECT *  FROM customer where customer.id =".$_SESSION["id"];	
											$result = mysqli_query($conn,$sql);
											if (mysqli_num_rows($result)>0) {
												// output data of each row
												$row = mysqli_fetch_assoc($result); 
													//echo "<option>".$row['driver_id']."</option>";
													echo "<label><br>First Name</label>
														<input class=\"form-control\" name=\"fname\" id= \"fname\"value =\"".$row['firstName']."\" required>";
													echo "<label><br>Last Name</label>
														<input class=\"form-control\" name=\"lname\" id= \"lname\"value =\"".$row['lastName']."\"required>";
													echo "<label><br>Mobile no</label>
														<input class=\"form-control\" name=\"mobile\" id= \"mobile\"value =\"".$row['contact_no']."\"input type = \"number\" required>";
													echo "<label><br>Email Address</label>
														<input class=\"form-control\" name=\"email\" id= \"email\"value =\"".$row['email']."\" input type = \"email\" required>";
													echo "<label><br>Age</label>
														<input class=\"form-control\" name=\"age\" id= \"age\"value =\"".$row['age']."\"input type = \"number\" min=\"0\" max=\"99\" required>";
													echo "<label><br>Address</label>
														<input class=\"form-control\" name=\"address\" id= \"address\"value =\"".$row['address']."\"required>";
																											   
														
													} else {
														echo "0";
													}

											mysqli_close($conn);
											?> 
											
                                        </div>
                                             
                                        
                                        <input type="submit" class="btn btn-default" value="Save">
										
                                    </form>
																		
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                               
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
		<!--</div>-->
    </div>

<div id="footer-wrapper">                                       <!-- footer-->
	<div id="footer" class="container">
		<div id="box1">
			<div class="title">
				<h2>Latest Facilities</h2>
			</div>
			<ul class="style1">
				<li><a href="#">Hair Treatment</a></li>
				<li><a href="#">Skin care</a></li>
				<li><a href="#">Facilities</a></li>
				<li><a href="#">Facilities</a></li>				
			</ul>
		</div>
		<div id="box2">
			<div class="title">
				<h2>Contact for more</h2>
			</div>
			<ul class="style1">
				<li><a href="#">Blaze Cut</a></li>
				<li><a href="#">2254-H Hunters Wood Plaza </a></li>
				<li><a href="#">Reston VA- 20191</a></li>
				<li><a href="#">571-471-0235</a></li>
				<li><a href="#">mperera71@yahoo.com</a></li>
			</ul>
		</div>
		<div id="box3">
			<div class="title">
				<h2>Follow Us</h2>
			</div>
			<p>Your Skin Deserves More </p>
			<ul class="contact">
				<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
				<li><a href="#" class="icon icon-facebook"><span>Facebook</span></a></li>
				<li><a href="#" class="icon icon-dribbble"><span>Dribbble</span></a></li>
				<li><a href="#" class="icon icon-tumblr"><span>Tumblr</span></a></li>
				<li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
			</ul>
				<a href="#" class="button">Read More</a> </div>
		</div>
	
</div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
