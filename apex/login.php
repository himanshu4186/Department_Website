<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/headlogo.png" type="image/png">
	<title>CU-AIT</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php 	 session_start(); ?>

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
						<a href="login.php" class="text-uppercase">Login/Register</a>
						
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
							<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="about-us.php">About</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="courses.php">Courses</a></li>
									<li class="nav-item"><a class="nav-link" href="course-details1.php">Cloud Computing</a></li>
									<li class="nav-item"><a class="nav-link" href="course-details2.php">Big Data</a></li>
									<li class="nav-item"><a class="nav-link" href="course-details3.php">Information Security</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="mark.php" class="nav-link dropdown-toggle" role="button" aria-haspopup="true"
								 aria-expanded="false">Marking</a>
							</li>
							<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
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
		<div class="container class123">


			<?php
		
	
		 if(isset($_SESSION['msg']))
		{
			echo '<p class="message"> <font size="5" color="White"> <center> <i>';
			echo $_SESSION['msg'];
			echo "</i></center></font></p>";
			unset($_SESSION['msg']);
		}
		if(isset($_SESSION['error']))
		{
			echo '<p class="error-message"> <font size="6" color="White"> <center><i>';
			echo $_SESSION['error'];
			echo "</i> </center></font></p>";
			unset($_SESSION['error']);
		}
		 if(isset($_SESSION['reg']))
		{
			echo '<p class="message"> <font size="5" color="White"><center> <i>';
			echo $_SESSION['reg'];
			echo "</i> <center></font></p>";
			unset($_SESSION['reg']);
		}
		if(isset($_SESSION['reg_error']))
		{
			echo '<p class="message"> <font size="5" color="White"> <center><i>';
			echo $_SESSION['reg_error'];
			echo "</i> </center></font></p>";
			unset($_SESSION['reg_error']);
		}
		if(isset($_SESSION['change']))
		{
			echo '<p class="message"> <font size="5" color="White"> <center><i>';
			echo $_SESSION['change'];
			echo "</i> </center></font></p>";
			unset($_SESSION['change']);
		}
		
		?>
		
	
	
			<section class="main">
				<form class="form-4" action="check.php" method ="POST" >
				    <h1>Login</h1>
				    <p>
				        Username
				        <input type="text" class="form-control" name="Username" placeholder="eg:abc" required>
				    </p>
				    <p>
				        Password
				        <input type="password" class="form-control" name='Password' placeholder="eg:your password" required>
				    </p>
				        <input type="submit" class="btn btn-primary" name="submit" value="Continue">
				
				</form>​
				

			</section>
			
			<!--	    	Modal			 -->
			<div class='modal fade' id='div_mo'> 
		<div class='modal-dialog'>
			<div class='modal-content'> 
				<div class='modal-header'>
				<h1>Register a new user</h1>
				<button class='close' data-dismiss='modal'>&times;</button>
				</div>
				<div class='modal-body'> 
					<form action="register.php" method ="POST" id='u_f'> 
						<div class='form-group'>
						<label for="div1">First name:</label> 
						<input type="text" class='form-control' name="Fname" id='div1' required>
						</div>
						<div class='form-group'>
						<label for="div2">Last name</label> 
						<input type="text" class='form-control' name="Lname" id='div2'>
						</div>
						<div class='form-group'>
						<label for="div3">E-Mail</label> 
						<input type="email" class='form-control' name="Email" id='div3' required>
						</div>
						<div class='form-group'>
						<label for="div3">Username</label> 
						<input type="text" class='form-control' name="Username" id='div5' required>
						</div>
						<div class='form-group'>
						<label for="div4">Password</label> 
						<input type="password" class='form-control' name="Password" id='div4' required>
						</div>
						<div class='form-group'>
						<label for="div4">Security question!!</label> 
						<input type="text" class='form-control' name="Security" id='div4' required>
						</div>		
										
				</div>
				<div class='modal-footer'>
				<input type="submit" class='form-control btn btn-success' value="Register" name='sub'>
				</div>
				</form>
			</div>
		</div>
	</div>
		<button class='btn btn-primary ' data-toggle='modal' data-backdrop='static' data-target='#div_mo'>Register now</button><br>	<br><br><br>
			
		</div>
		<br>

		
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