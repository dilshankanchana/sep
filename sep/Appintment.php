<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
session_start();                        // Start the session
if(isset($_SESSION['name']) && !empty($_SESSION['name'])){	
}
else{
	header("Location: Login.php");	
	die();
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">                                 <!-- beginning of html -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Priya Esthetics</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<style>
.temp1{     
    position: absolute;
    top: calc(120% - 540px);
    left: calc(95% - -555px);
    color: #DA0707;
	    cursor: pointer;
}
.temp2{     
    position: absolute;
    top: calc(120% - 540px);
    left: calc(95% - -435px);
    color: #DA0707;
	    cursor: pointer;
}
.temp3{     
    position: absolute;
    top: calc(120% - 178px);
    left: calc(95% - -85px);
    color: #DA0707;
	    cursor: pointer;
}
.temp4{     
    position: absolute;
    top: calc(120% - 178px);
    left: calc(95% - -215px);
    width: 300px;
	    
}
</style>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />             <!-- set css files-->
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- Date picker -->
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/> 
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script> 
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 
	
	
	<script> 		<!-- datepicker to select the date -->
	$(document).ready(function() { 		
		$("#datepicker").datepicker({ minDate: 0 ,		// prevent prev days
		beforeShowDay: function(date) {
				var day = date.getDay();
				return [(day != 1)];					// remove sunday being selecting
			}});
		}); 

function showSubtreatment() {
	
	var str=document.getElementById("treatmentCatName").value;
	
	
    if (str == "") {
        document.getElementById("ajax").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
			
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("ajax").innerHTML = xmlhttp.responseText;
				
            }
        }
        xmlhttp.open("GET","getSubtreat.php?q="+str,true);
        xmlhttp.send();
		
    }
}

function showAvailability() {
	
	var str="date="+document.getElementById('datepicker').value+"&time="+document.getElementById('selectedTime').value;
    
	
    if (str == "") {
        document.getElementById("Awarning").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
			
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("Awarning").innerHTML = xmlhttp.responseText;
				
            }
        }
        xmlhttp.open("GET","getAvailability.php?"+str,true);
        xmlhttp.send();
		
    }
}
/*
document.getElementById('user_warning').addEventListener('input', function () {

   var str="catId="+document.getElementById('treatmentCatName`').value
			+"&treatId="+document.getElementById('treatment').value+document.getElementById('datepicker').value+document.getElementById('selectedTime').value;
       if (str == "") {
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("ajax").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","getSubtreat.php?"+str,true);
        xmlhttp.send();
		alert(str);
    }
});*/

	</script>
    
</head>     <!--beginning of html-->

<body>
<div id="wrapper">
	<div id="menu-wrapper">
		<div id="menu" class="container">     <!-- top selection tab-->
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="Services.php">Services</a></li>
				<li><a href="facial.php">Facial Treatments</a></li>
				<li class="current_page_item"><a href="#">Appointments</a></li>     <!-- current page-->				
				<li><a href="quo.php">Quotation</a></li>
                <li><a href="contact.php">contact</a></li>
			</ul>
		</div>
		<!-- end #menu --> 
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">Priya Esthetics</a></h1>        <!-- heading-->
				<p>Your Skin Deserves More </p>
			</div>
		</div>
	</div></div>
	 
    <!-- Appointment form-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <!-- use php to find the name of current session owner-->
                            <?php
                            echo "Welcome ".$_SESSION["name"] .", Reserve Your Time!!";     // use session variable to get the name
                            ?>
                        </div>
						
                        <div class="panel-body">
                            <div class="row">
							
                                <div class="col-lg-4">
								<div class ="temp1" id="user_warning">
												<a href="logout.php"><img id="log" src= "images/logout.png" style="width: 120px;"></img></a>
									</div>
									<div class ="temp2" id="user_warning">
												<a href="edit.php"><img id="log" src= "images/edit.png" style="width: 120px;"></img></a>
									</div>
                                    <form role="form" action="AppointmentPhp.php" method="post">              <!-- the appointment form to get data from customer-->
                                        <div class="form-group">    <!-- its class-->
																				
                                            <label>Treatment Category</label>                    
                                            <select name = "treatmentCatName" class="form-control" id = "treatmentCatName" onchange = "showSubtreatment()">
											
                                                <?php                                                               //adding combo box to select treatment
	                                               // Create db connection
													require_once __DIR__ . '/db_config.php';
														$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE) or die(mysqli_connect_error());
                                                    if (!$conn) {                // Check connection
                                                        die("Connection failed: " . mysqli_connect_error());        // if it fails
                                                        echo "failed";
                                                    }
	                                               $sql = "SELECT cat_name FROM `main_category` ";         //sql query to get names
	                                               $result = mysqli_query($conn,$sql);
				                                    $count=1;			
			                                         if (mysqli_num_rows($result)>0) {       // if rows available
				                                        // output data of each row
				                                        while($row = mysqli_fetch_assoc($result)) {
					                                           echo "<option value = ".$count.">".$row['cat_name']."</option>";   //place options foreach
															   $count++;
				                                        }
			                                         } else {
				                                            echo "0";
			                                         }

                                                    mysqli_close($conn);        //close the connection
												?> 
                                            
                                            </select><br>
											<label>Treatment</label>
											<input list = "treatment"  name="treatment"  class="form-control" >
												<div id="ajax" class="form-control><input name= "treatment" >
												<datalist id="treatment">
													<option value= "Please insert "/>
												</datalist>
												</div>
                                            
											<br>
											
											
                                            <label>Date</label>
											<form> <input name = "date" id="datepicker" class="form-control"/> </form><br>
                                            <label>Time</label>
                                            <input name = "selectedTime" id ="selectedTime" list="browsers" class="form-control" >

												<datalist id="browsers">
													<!--option >1000h - 1100h</option-->
													<option value="1000h - 1100h">
													<option value="1100h - 1200h">
													<option value="1300h - 1400h">
													<option value="1400h - 1500h">
													<option value="1500h - 1600h">
													<option value="1600h - 1700h">
												</datalist> <br></input>
												<div class ="temp3" id="user_warning">
													<img id="availabilityCheck" src= "images/availability.GIF" style="width: 120px;" onclick = "showAvailability()"></img>
												</div>
												<div id="Awarning" class="temp4">
												<p></p>
												</div>
                                        <input type="submit" class="btn btn-default">
                                        
                                    </form>                                                     <!--end of form-->
										
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                               
                            </div>
                            <!-- /.row (nested) -->
							                              
                            </div>
							
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
	<!--customer hisory tables-->
	<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">                            
                        Schedule History
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>                                            
                                            <th>Appointment ID</th>
                                            <th>Treatment</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
          <!-- adding data to the drivers information table  -->                                   
                 
<?php
    // Create db connection
	require_once __DIR__ . '/db_config.php';
	$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE) or die(mysqli_connect_error());
            // Check connection
            if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                    echo "failed";
                }

	$sql = "SELECT appointment_Id,tretName,date,time FROM `appointment` join treatment WHERE tretment_Id = no and customer_Id = ".$_SESSION['id'];	
	       $result = mysqli_query($conn,$sql);
				$count=1;
			
			if (mysqli_num_rows($result)>0) {
				// output data of each row
				while($row = mysqli_fetch_assoc($result)) {
                    
                    echo "<tr>";
                    //echo "<td>".$count."</td>";
					echo "<td>".$row['appointment_Id']."</td>";
                    echo "<td>".$row['tretName']."</td>";
                    echo "<td>".$row['date']."</td>";
                    echo "<td>".$row['time']."</td>";
                    echo "</tr>";
				}
			} else {
				echo "0";
			}

            mysqli_close($conn);
                                        ?>	
                                    </tbody>
                                </table>
                            </div>
        </div></div>
                </div>
            
            
            </div>

<div id="footer-wrapper">                                   <!--begining of footer-->
	<div id="footer" class="container">
		<div id="box1">                                               <!--leftmost box for latest facilities -->
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
		<div id="box2">                                                <!-- middle box to enter the contact details-->
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
		<div id="box3">                                               <!-- rightmost box to enter the follow links-->
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
	<p>&copy; Untitled. All rights reserved. | Copyright 2015. Priya Esthetics LLC. | Design by <a href="" rel="">Chamil Elladeniya</a>.</p>
</div>



</body>
</html>



