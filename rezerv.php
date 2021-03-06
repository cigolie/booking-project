<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Naomi's Company</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
				<div id="gtco-logo"><a href="index.html">Darkblue <em> ??????</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="index.html">Travel</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_6.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Register!</h1>	
							<br><h1>??????</h1>
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
<?php
include_once 'dbconnect.php';
$d = $_GET['DATA'];
$cz = $_GET['COD'];
$nr = $_GET['NR'];
$nl = $_GET['LOC'];
$q1= "SELECT sum(Locuri) AS Locuri FROM locuri WHERE Cod_zbor=".$cz." AND Data_plecarii='".$d."'";
$result1=mysqli_query($con, $q1);
$row = mysqli_fetch_array($result1);
$l = $row['Locuri']+$nr;
$q2="SELECT Locuri FROM locuri WHERE Cod_zbor=".$cz." AND Data_plecarii='".$d."'";	
$result2 = mysqli_query($con, $q2);
$row = mysqli_fetch_array($result2);
if(mysqli_num_rows($result2)==0 && $nr<$nl)
{$q3 = "INSERT INTO locuri VALUES (".$cz.",'".$d."',".$nr.")";
	mysqli_query($con, $q3);}
else 
{   if($l<=$nl)
	{$q5 = "UPDATE locuri SET Locuri=".$l." WHERE Cod_zbor=".$cz." AND Data_plecarii='".$d."'";
	 mysqli_query($con, $q5); }
	 else echo '<br>You chose too many passengers!';
}
	
	if($l<=$nl)
	{
	echo '		
<form method = "GET" action = "final.php">
<div class="row form-group"><div class="col-md-5"><label>Name</label>
<input type="textbox" name="NUME" class="form-control">
</div></div>
<div class="row form-group"><div class="col-md-5"><label>Phone</label>
<input type="textbox" name="TEL" class="form-control">
</div></div>
<input type="hidden" name="DATA" value="'.$d.'">
<input type="hidden" name="COD" value="'.$cz.'">
<input type="hidden" name="NR" value="'.$nr.'">
<input type="hidden" name="LOC" value="'.$nl.'">
<input type="hidden" name="L" value="'.$l.'">
<div class="row form-group"><div class="col-md-5">
<input type="submit" class="btn btn-primary btn-block" value="Book">
</div></div>
</form>';
	}
	else
	 echo '<br>There are no available seats for this flight on '.$d.'.<br><a href="index.html">Back to Homepage</a>';
?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<!-- Datepicker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
