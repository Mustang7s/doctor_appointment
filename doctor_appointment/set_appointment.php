<?php
require_once 'dbconnection.inc.php';
session_start();

if (!isset($_SESSION['Email2']) && !isset($_SESSION['username'])) {
    header("Location: index.html");
}else{
  $email = $_SESSION['Email2'];
  $uid = $_SESSION['username'];
  $date = date("m/d/Y");
  $query=mysqli_query($conn,"SELECT * FROM `users` WHERE `Email_Address`='$email'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
}

?>

<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>DOCTOR APPOINTMENT SYSTEM - &amp; Set Appointment</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="js/modernizr.js"></script>
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	
	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 header-logo">
					<br>
					<a href="index1.php"><img src="img/logo.png" alt="" class="img-responsive logo"></a>
				</div>

				<div class="col-md-7">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      
					      <ul class="nav navbar-nav navbar-right">
					        <li><a class="menu active" href="index.html" >Home</a></li>
					        <li><a class="menu" href="index1.php">about us</a></li>
					        <li><a class="menu" href="index1.php">our services </a></li>
					        <li><a class="menu" href="index1.php">our team</a></li>
					        <li><a class="menu" href="index1.php"> contact us</a></li>
					      </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->

	<section class="slider" id="home">
		<div class="container-fluid">
			<div class="row">
			    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="header-backup"></div>
			        <!-- Wrapper for slides -->
			        <div class="carousel-inner" role="listbox">
			            <div class="item active">
			            	<img src="img/1.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>providing</h1>
		               			<p>highquality service for men &amp; women</p>
		               			<button>learn more</button>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/2.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>aiding</h1>
		               			<p>doctors of all professions &amp; in their job</p>
		               			<button>learn more</button>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/3.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>allowing</h1>
		               			<p>patients to schedule visits &amp; and their track medical history</p>
		               			<button>learn more</button>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/4.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>simply</h1>
		               			<p>a secure and efficient service for doctors &amp; and patients</p>
		               			<button>learn more</button>
			                </div>
			            </div>
			        </div>
			        <!-- Controls -->
			        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
			            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			            <span class="sr-only">Previous</span>
			        </a>
			        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
			            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			            <span class="sr-only">Next</span>
			        </a>
			    </div>
			</div>
		</div>
	</section><!-- end of slider section -->
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<!-- contact section starts here -->
	<section class="contact">
		<div class="container">
			<div class="row">
				<div class="contact-caption clearfix">
					<div class="contact-heading text-center">
						<h2>Set Appointment</h2>
					</div>
				<!-- 	<div class="col-md-5 contact-info text-left">
						<h3>contact information</h3>
						<div class="info-detail">
							<ul><li><i class="fa fa-calendar"></i><span>Monday - Friday:</span> 8:00 AM to 9:00 PM</li></ul>
							<ul><li><i class="fa fa-map-marker"></i><span>Address:</span> Nairobi, Kenya.</li></ul>
							<ul><li><i class="fa fa-phone"></i><span>Phone:</span> 0790598764</li></ul>
							<ul><li><i class="fa fa-envelope"></i><span>Email:</span> <a href="mailto:malikjoof212535@daystar.ac.ke">vmalikjoof212535@daystar.ac.ke</a></li></ul>
						</div>
					</div> -->
					<div class="col-md-8 col-md-offset-1 contact-form">
						<h3></h3>

						<form class="form" method="POST" action="insertion.inc.php">
							<input class="name" type="text" name="did" required placeholder="Doctor ID">
							<input class="name" hidden type="text" required name="uid" value="<?php echo $uid; ?>">
							<label>Date of Appointment</label>
							<input class="phone" type="date" required name="date">
							<input class="name" hidden required type="text" name="leo" value="<?php echo $date; ?>">
							<label>Time of Appointment</label>
							<input class="phone" required type="time" name="time">
							<textarea class="message" required name="info" cols="30" rows="10" placeholder="Additional Information"></textarea>
							<br>
							<br>
							<input class="submit-btn" type="submit" name="seta" value="SUBMIT">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of contact section -->
	<br>
	<br>
	<br>
	<br>
	<br>
	<!-- footer starts here -->
	<footer class="footer clearfix">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 footer-para">
					<p>&copy; All right reserved</p>
				</div>
<!-- 				<div class="col-xs-6 text-right">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-skype"></i></a>
				</div> -->
			</div>
		</div>
	</footer>

	<!-- script tags
	============================================================= -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>

	    <script type="text/javascript">
      
             function myFunction() {
          var x =
          document.getElementById('pass');
            if (x.type === "password"){
              x.type = "text";
            } else {
              x.type = "password";
            }
        }

                   function myFunction1() {
          var x =
          document.getElementById('pass1');
            if (x.type === "password"){
              x.type = "text";
            } else {
              x.type = "password";
            }
        }

    </script>

</body>
</html>