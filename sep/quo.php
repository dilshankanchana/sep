<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Priya Esthetics</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
    
<!--<link href="http://fonts.googleapis.com/css?family=Raleway:400,200,500,600,700,800,300" rel="stylesheet" />-->
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

	

    



    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- Auto price update -->
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	<script type="text/javascript">google.load("jquery", "1")</script>
	<script src="js/form.js" type="text/javascript"></script>
		<script>
	$(document).ready(function()
{	
	var total = 0;
	
	function calcTotal()
	{
		$("input:checked").each(function()
		{
			//This happens for each checked input field
			var value = $(this).attr("value");
			total += parseInt(value); 
		});
	}

	//This happens when the page loads
	calcTotal();	
	//$("form").before('<p class="total">Total: <strong>' + total + '</strong></p>');
	$(":button").before('<p class="total">Total cost: <strong>$' + total + '</strong></p>');
		
	$("input:checkbox, input:radio").click(function()
	{
		total = 0;
		calcTotal();
		$("p.total").html("Total: <strong>$" + total + "</strong>");
	});
});
</script>

</head>
<body>                                                              <!--begining of body -->
<div id="wrapper">
	<div id="menu-wrapper">
		<div id="menu" class="container">
			<ul>                                                             <!-- top selection bar-->
				<li><a href="index.php">Home</a></li>
				<li><a href="Services.php">Services</a></li>     
				<li><a href="facial.php">Facial Treatments</a></li>
				<li><a href="Appintment.php">Appointments</a></li>		
				<li class="current_page_item"><a href="#">Quotation</a></li>     <!-- current page-->
                <li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
      
	<div id="header-wrapper">                                          <!-- header -->
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">Priya Esthetics</a></h1>        <!-- header name-->
				<p>Your Skin Deserves More </p>     <!--header byline -->
			</div>
		</div>
	</div>
	</div>
	
    
	<div id="page" class="container">          <!--container to add services list -->
		<div id="wrapper2">

		<h4>Choose your own packages and services</h4>
		<form action="" method="post">
			<fieldset id="packages">
				<legend>Hair dressing</legend>
				<ol>
					<li>
						<input type="checkbox" name="package" id="package_pro" value="69" />
						<label for="package_basic">Hair cutting. ($60)</label>
					</li>
					<li>
						<input type="checkbox" name="package" id="package_pro" value="75" />
						<label for="package_pro">curling or Layering.($75)</label>
					</li>
					<li>
						<input type="checkbox" name="package" id="package_pro" value="75" />
						<label for="package_pro">Hair colouring.($75)</label>
					</li>
					<li>
						<input type="checkbox" name="package" id="package_pro" value="125" />
						<label for="package_pro">Hair straightening. ($125)</label>
					</li>
				</ol>
			</fieldset>
			<fieldset id="packages">
				<legend>Facial</legend>
				<ol>
					<li>
						<input type="checkbox" name="package" id="package_pro" value="99"  />
						<label for="package_basic">Anti aging Facial. ($99)</label>
					</li>
					<li>
						<input type="checkbox" name="package" id="package_pro" value="149" />
						<label for="package_pro">Hydrating Facial. ($149)</label>
					</li>
					<li>
						<input type="checkbox" name="package" id="package_pro" value="99"  />
						<label for="package_basic">Deep pore clensing Facial. ($99)</label>
					</li>
					<li>
						<input type="checkbox" name="package" id="package_pro" value="149" />
						<label for="package_pro">Ayurevedic facial. ($149)</label>
					</li>
					<li>
						<input type="checkbox" name="package" id="package_pro" value="99"  />
						<label for="package_basic">Gold Facial. ($99)</label>
					</li>
					<li>
						<input type="checkbox" name="package" id="package_pro" value="149" />
						<label for="package_pro">Sea Spa- G.M Collin. ($149)</label>
					</li>
					<li>
						<input type="checkbox" name="package" id="package_pro" value="149" />
						<label for="package_pro">Botinol- G.M Collin. ($149)</label>
					</li>
				</ol>
			</fieldset>
			<fieldset id="packages">
				<legend>Threading</legend>
				<ol>
					<li>
						<input type="checkbox" name="package" id="package_pro" value="100"  />
						<label for="package_basic">Full face. ($100)</label>
					</li>
					<li>
						<input type="checkbox" name="package" id="package_pro" value="50" />
						<label for="package_pro">Eyebrow. ($50)</label>
					</li>
					<li>
						<input type="checkbox" name="package" id="package_pro" value="60"  />
						<label for="package_basic">Upperlip. ($60)</label>
					</li>
					<li>
						<input type="checkbox" name="package" id="package_pro" value="60" />
						<label for="package_pro">Side burns. ($60)</label>
					</li>
				</ol>
			</fieldset>
			<fieldset id="packages">
				<legend>Waxing</legend>
				<ol>
					<li>
						<input type="checkbox" name="package" id="package_pro" value="99" />
						<label for="package_basic">Face. ($99)</label>
					</li>
					<li>
						<input type="checkbox" name="package" id="package_pro" value="79" />
						<label for="package_pro">Hands. ($79)</label>
					</li>
					<li>
						<input type="checkbox" name="package" id="package_pro" value="99" />
						<label for="package_pro">Legs. ($99)</label>
					</li>
				</ol>
			</fieldset>
			<fieldset id="delivery_speed">
				<legend>Make Up</legend>
				<ol>
					<li>
						<input type="checkbox" name="speed" id="speed_1day" value="80" />
						<label for="speed_1day">Updos and Make up ($80)</label>
					</li>
					<li>
						<input type="checkbox" name="speed" id="package_pro" value="80"  />
						<label for="speed_3days">Henna ($80)</label>
					</li>
					<li>
						<input type="checkbox" name="speed" id="speed_5days" value="69" />
						<label for="speed_5days">Tinting ($69)</label>
					</li>
				</ol>
			</fieldset>	
			
			<p><input id="button" type="button" style="display: none;"></p>
			</form>
			</div>
        </div>
</div>
	

<div id="footer-wrapper">                               <!-- Set the footer-->
	<div id="footer" class="container">
		<div id="box1">                                   <!--leftmost box for latest facilities -->
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
		<div id="box2">                                       <!-- middle box to enter the contact details-->
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
		<div id="box3">                                       <!-- rightmost box to enter the follow links-->
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
</div>                                                      <!--bottom line-->
<div id="copyright" class="container">          
	<p>&copy; Untitled. All rights reserved. | Copyright 2015. Priya Esthetics LLC. | Design by <a href="" rel="">Chamil Elladeniya</a>.</p>
</div>
</body>
</html>
