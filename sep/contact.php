<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Priya Esthetics</title>                                              <!-- site name -->
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />    <!--link css files -->
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />      <!--link css font file -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400|Lobster' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
  <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();                                         //image slider using java script-->
    });
  </script> 
<style>
* { margin: 0; padding: 0; outline: 0; border: 0; 
	background-color = #000000;
	}

/* HTML5 tags */

.container1 {
    width: 1349px;;
    margin: 0px auto;
    background-color: antiquewhite;
}
input#submit {
    color: #000;
    font-size: 18px;
    background-color: #D3D7D6;
    border: 2px #499483 solid;
    padding: 10px;
}
/* basic css */

body { 
	
  font-family: 'Lato';
  color: #fff;
}

p { 
	font-family: 'Lato', sans serif;
	font-weight: 300;
	color: #16a085; 
	font-size: 16px; 
}

a {
	text-decoration: none;
}

a:visited {
	text-decoration: none;
}

h2 {
  color: #777;
  font-family: 'Lato';
  font-size: 22px;
}

.current {
  text-decoration: underline;
  color: #9EcDDF;
}

header {
  text-align: center;
  background-color: #9EcDDF;
  background-size: cover;
  color: #fff;
  padding-top: 10px;
}

.header-img {
  padding: 20px 0;
}



.nav {
  font-family: 'Lato';
  font-weight: 300;
}

.nav li a {
  color: #ffffff;
}

.intro {
  padding-bottom: 20px;
}

/*Contact Form*/
#contact-form {
	width: 400px;
  background-color: #ffffff;
	margin: 0px auto;
  padding: 40px 40px 35px 40px;
  border-radius: 0 0 3px 3px;
	-moz-border-radius: 0 0 5px 5px;
}

input[type="text"] {
	display: inline;
	width: 400px;
  font-size: 14px;
	background-color:#16a085;
  font-family: 'Lato';
  color: white;
	padding: 5px 0px 5px 10px;
	margin: 5px 0px 5px 0px;
	border-radius: 3px;
	-moz-border-radius: 5px;
}

.inputfield {
  padding-top: 10px;
  font-weight: 400;
}

::-webkit-input-placeholder {
  color: white;
  font-weight: 300;
}

input[type="submit"]{
	display: inline;
	width: 410px;
  font-size: 14px;
	background-color:#999;
	color: #fff;
	padding: 5px 0px;
	margin: 10px 0px 0px 0px;
	border-radius: 3px;
	-moz-border-radius: 5px;
}

input[type="submit"]:hover {
	background-color:#777;
}

textarea {
	display: inline;
  width: 400px;
	max-width: 400px;
	height: 100px;
  max-height: 300px;
  font-size: 14px;
	background-color:#16a085;
	color:#fff;
  padding: 5px 0px 5px 10px;
	margin: 5px 0px 0px 0px;
	border-radius: 3px;
	-moz-border-radius: 5px;
}

</style>
</head>
<body>
<div id="wrapper">
	<div id="menu-wrapper">
		<div id="menu" class="container">
			<ul>                                                                 <!-- top selection tab-->
				<li><a href="index.php">Home</a></li>        
				<li><a href="Services.php">Services</a></li>
				<li><a href="facial.php">Facial Treatments</a></li>
				<li><a href="Login.php">Appointments</a></li>				
				<li><a href="quo.php">Quotation</a></li>     
                <li class="current_page_item"><a href="contact.php">Contact</a></li><!-- current page-->
			</ul>
		</div>
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">Priya Esthetics</a></h1>        <!--Header name-->
				<p>Your Skin Deserves More </p>
			</div>
		</div>
	</div>
	</div>
</div>

  <div class="container1">
  <form id="contact-form" method="POST" action="contactPhp.php" name="ContactForm">
    <h2>
      Drop us a line!
    </h2>
    <p class="intro">
      What do you like about our services? What services do you want in the future? Contact us and let us know!
    </p> 

      <p class="inputfield"><label for="subject">Subject</label></p> 
    			<input type="text" id="subject" name="subject" placeholder="What's this about?" style="color: #fff;" onfocus="if (this.value == '90') {this.value=''; this.style.color='#000';}" required tabindex="1" /> 
    
    	<p class="inputfield"><label for="message">Your Message</label></p> 
    			<textarea name="message" id="message" tabindex="2"></textarea> 
    		
      <p class="inputfield"><label for="name">Name</label></p> 
    			<input type="text" id="name" name="name" placeholder="First and last name" style="color: #fff;" onfocus="if (this.value == '90') {this.value=''; this.style.color='#000';}" required tabindex="3" /> 
    			 
    	<p class="inputfield"><label for="email">Email</label></p> 
    			<input type="text" id="email" name="email" placeholder="yourname@domain.com" required tabindex="4" />
    			
    	<input name="submit" type="submit" id="submit" tabindex="5" value="Submit" />
	 </form>
  </div>

<div id="footer-wrapper">                           <!--set footer -->
	<div id="footer" class="container">
		<div id="box1">
			<div class="title">
				<h2>Latest Facilities</h2>                      <!--leftmost box for latest facilities -->
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
				<h2>Contact for more</h2>                       <!-- middle box to enter the contact details-->
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
				<h2>Follow Us</h2>                              <!-- rightmost box to enter the follow links-->
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
</div>                                              <!--bottom line-->
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Copyright 2015. Priya Esthetics LLC. | Design by <a href="" rel="">Chamil Elladeniya</a>.</p>
</div>
</body>
</html>         <!--End of html-->
