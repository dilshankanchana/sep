<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

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
<style>
.temp{     
    
    position: absolute;
	top: calc(120% - 118px);
    left: calc(95% - -55px);
    color: #DA0707;
	font-family: Arial;
	font-size: 12px;
}
</style>

<link href="default.css" rel="stylesheet" type="text/css" media="all" />            <!-- set css files-->
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
$(function () {
	$("#pwd2").keyup(function () {
		
		var password1 = $("#pwd1").val();
  var password2 = $("#pwd2").val();

    
 //if(password2.length == password1.length){
    if(password1 == password2) {
       document.getElementById("validate-status").src="images/right.png";       
    }
    else {
        document.getElementById("validate-status").src="images/wrong.png";  
    }
		
 //}
 });
});
    $(function () {
        $("#we").click(function () {
            var password = $("#pwd1").val();
            var confirmPassword = $("#pwd2").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
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
                            Choose a new password
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form  action="resetPhp.php" method="post">     <!-- php use to connect with db-->
                                        <div class="form-group">
                                            
                                            <label><br>New Password</label>
                                            <input class="form-control" name="pwd12" id= "pwd1" type="password" required>
                                            <label><br>Confirm Password</label>
                                            <input type="password" class="form-control" name="pwd22" id="pwd2" required>
											<div class ="temp" id="user_warning">
												<img id="validate-status" src= "images/null.png" style="width: 20px;"></img>
											</div>
                                        </div>
                                        <input id = "we" type="submit" class="btn btn-default" value="Continue">						
                                        <button  class="btn btn-default"><a href="Login.php"> Cancel </a></button>
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
