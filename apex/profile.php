<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/headlogo.png" type="image/png">
	<title>Profile</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/all.css" />
	<link rel="stylesheet" href="css/screen.css" />
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php session_start(); ?>
	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="header-top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-sm-6 col-4 header-top-left">
						<a href="tel:+9530123654896">
							<span class="lnr lnr-phone"></span>
							<span class="text">
								<span class="text">+919012 3654 896</span>
							</span>
						</a>
						<a href="mailto:support@colorlib.com">
							<span class="lnr lnr-envelope"></span>
							<span class="text">
								<span class="text">support@cuait.com</span>
							</span>
						</a>
					</div>
					<div class="col-lg-6 col-sm-6 col-8 header-top-right">
						<a href="logout.php" class="text-uppercase">Logout</a>
						
					</div>
				</div>
			</div>
		</div>

		<div class="main_menu">
			<div class="search_input" id="search_input_box">
				<div class="container">
					<form class="d-flex justify-content-between" method="" action="">
						<input type="text" class="form-control" id="search_input" placeholder="Search Here">
						<button type="submit" class="btn"></button>
						<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
					</form>
				</div>
			</div>

			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="img/logocu.jpg" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="loggedin.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Attendance</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle"  role="button" aria-haspopup="true"
								 aria-expanded="false">My Course</a>
								
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" role="button" aria-haspopup="true"
								 aria-expanded="false">Account</a>
								
							</li>
							<li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
							<li class="nav-item">
								<a href="#" class="nav-link search" id="search">
									<i class="lnr lnr-magnifier"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->
	<div class='container'>	<p style="text-align:center;">
<img src="img/id.png" alt="Paris" class="center1234"></p>
</div><br>
<?php
include "include.php";
//$user=$_SESSION['user'];
//$Bus_id;
$sel="SELECT * FROM `user` where Username='".$_SESSION['user']."'" ;
$str= mysqli_query($connec,$sel);
$rows= mysqli_num_rows($str);
if($rows==0 || $rows>1)
{
	header('Refresh:5; url=generic.php');

	echo '<h3 style= "text-align:center;"> <font color="red">Data Base Error </font></h3>';
	echo "<br>";
	echo '<p style= "text-align:center">Redirecting to the home page in 5 seconds</p>';
}
else
{

	while($row=mysqli_fetch_array($str))
{
	echo '<div class="container-fluid">';
	echo '<table class="table table-striped table-hover" style="width:100%" align="center">';

	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>First Name:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Fname'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Last Name:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Lname'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Username:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Username'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Email:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Email'];
		echo "</td>";
	echo "</tr>";

	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Elementary/Primary school:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Security'];
		echo "</td>";
	echo "</tr>";
	echo "</table>";
	echo "</div>";
}
}
?>


	
	<!--================ Start footer Area  =================-->
    <footer class="footer-area section_gap">
        <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 col-sm-6 single-footer-widget">
        <h4>OUR INSTITUTES</h4>
          <ul>
            <li><a href="/uie/" title="University Institute Of Engineering">University Institute Of Engineering</a></li>
            <li><a href="/usb/" title="University School Of Business">University School Of Business</a></li>
            <li><a href="/uic/" title="University Institute Of Computing">University Institute Of Computing</a></li>
            <li><a href="/uiam/" title="University Institute of Film & Visual Arts">University Institute of Film & Visual Arts</a></li>
            <li><a href="/uithm/" title="University Institute Of Tourism & Hospitality Management">University Institute Of Tourism & Hospitality Management</a></li>
            <li><a href="/uips/" title="Pharma Sciences">University Institute of  Pharma Sciences</a></li>
              <li><a href="/uibt/" title="Pharma Sciences">University Institute of  Biotechnology</a></li>
            

          </ul>
      </div>
      <div class="col-md-3 col-sm-6  single-footer-widget">
        <h4>FEATURED INSTITUTES</h4>
          <ul>
          <li><a href="/uia/" title="University Institute Of Architecture, Design and Planning">University Institute Of Architecture</a></li>
            <li><a href="/uittr/" title="Engineering">University Institute Of Teachers Training & Research</a></li>
            <li><a href="/uils/" title="University School of Legal Studies">University School of Legal Studies</a></li>
            <li><a href="/uias/" title="University Institute of Agricultural Science">University Institute of Agricultural Science</a></li>
            <li><a href="/physical-education-and-sports/" title="University Institute of Physical Education and Sports">University Institute of Physical Education & Sports</a></li>
            <li><a href="/uims/" title="University Institute of Media Studies">University Institute of Media Studies</a></li>
            <li><a href="/language-literture-and-culture/" title="University Institute of Language, Literture and Culture">University Institute of Language, Literture & Culture</a></li>
            <li><a style="color:#e5ae4e" href="/ait/" title="Apex Institute of Technology">Apex Institute of Technology</a></li>
          </ul>
      </div>
      <div class="col-md-3 col-sm-6 single-footer-widget">
        <h4>ADMISSIONS</h4>
        <ul>
          <li><a href="">Downloadable Brochure</a></li>
          <li><a href="/admissions/how-to-apply.php">How to Apply?</a></li>
          <li><a href="/admissions/program-fees.php">Fee Structure</a></li>
          <li><a href="/international/">International Students</a></li>
          <li><a href="/scholarship/">CU Scholarship</a></li>
          <li><a href="/placements/">Placements</a></li>
        
        </ul>

      </div>
      <div class="col-md-3 col-sm-6 single-footer-widget">
        <h4>CONTACT</h4>
        <p style="line-height:17px; font-size:11px; text-align:none;">Chandigarh University<br> NH-95 Chandigarh-Ludhiana Highway,<br> Mohali, Punjab (INDIA)<br> General Helpline No:+91-160-3051003 <br> Toll Free: 1800 200 0025 <br /></p>
        <a href="https://www.facebook.com/chandigarhuniversitygharuan" target="_blank"><i class="fa fa-facebook faf"></i></a> 
        <a href="https://twitter.com/Chandigarh_uni" target="_blank"><i class="fa fa-twitter faf"></i></a>
        <a href="https://plus.google.com/u/0/107437691031499265955/" target="_blank"><i class="fa fa-google-plus faf "></i></a>
        <a href="https://www.instagram.com/chandigarhuniversity/" target="_blank"><i class="fa fa-instagram faf"></i></a>
        <a href="https://www.youtube.com/user/chandigarhuniversity" target="_blank"><i class="fa fa-youtube faf"></i></a>
        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.fasttrack.cuchd.in">
			<img width="119" height="40" src="img/google.png"> </a>
		<a  href="javascript:void(0)">	<img width="119" height="40" src="img/apple.png"></a>
      </div>
    </div> 
  </div>

    </footer>
    <!--================ End footer Area  =================-->
	<link href="https://snatchbot.me/sdk/webchat.css" rel="stylesheet" type="text/css"><script src="https://snatchbot.me/sdk/webchat.min.js"></script><script> Init('?botID=46162&appID=webchat', 600, 600, 'https://dvgpba5hywmpo.cloudfront.net/media/image/OpzTdDdP2J6Tt1pZaP8Uqwjeb', 'bubble', '#00AFF0', 90, 90, 62.99999999999999, '', '1', '#FFFFFF', '#FFFFFF', 0); /* for authentication of its users, you can define your userID (add &userID={login}) */ </script>
                            

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/countdown.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/owl-carousel-thumb.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>