<?php

namespace myReef\views;

class main{
	
	
	function beforeLoad(){
		
	}
	
	function header(){
		?>
		
		<!DOCTYPE html>
		<html lang="en">
		<head>

		  <meta charset="utf-8">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <title>MyReefClub</title>
		  

		  <!-- Bootstrap -->
		  <link href="<?php echo _LIBS; ?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		  <!-- Font Awesome -->
		  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">

		  <!-- CUSTOM CSS -->
		  <link href="<?php echo _CSS ?>style.css" rel="stylesheet">

		  <!-- FAVICON -->
		  <link href="<?php echo _IMAGES ?>favicon.png" rel="shortcut icon">

		  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		  <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		  <![endif]-->

		  <!-- JAVASCRIPT -->
		  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>		  
		
		  <script src="<?php echo _LIBS; ?>tether/js/tether.min.js"></script>
		  <script src="<?php echo _LIBS; ?>raty/jquery.raty-fa.js"></script>
		  <script src="<?php echo _LIBS; ?>bootstrap/dist/js/popper.min.js"></script>
		  <script src="<?php echo _LIBS; ?>bootstrap/dist/js/bootstrap.min.js"></script>
		  <script src="<?php echo _LIBS; ?>slick-carousel/slick/slick.min.js"></script>
		  <script src="<?php echo _LIBS; ?>jquery-nice-select/js/jquery.nice-select.min.js"></script>
		  <script src="<?php echo _LIBS; ?>fancybox/jquery.fancybox.pack.js"></script>
		  <script src="<?php echo _LIBS; ?>smoothscroll/SmoothScroll.min.js"></script>
		  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
	  
		  
		</head>

		<body class="body-wrapper">
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-expand-lg  navigation">
							<a class="navbar-brand" href="index.html">
								<img src="<?php echo _IMAGES ?>logo.png" alt="">
							</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<i class="fas fa-bars"></i>
							<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav ml-auto main-nav ">
									<li class="nav-item active">
										<a href="/" class="nav-link" href="index.html">Home</a>
									</li>								
									<li class="nav-item active">
										<a class="nav-link" href="index.html">Browse Listings</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="faq">FAQ</a>
									</li>									
									<li class="nav-item">
										<a class="nav-link" href="dashboard.html">Contact</a>
									</li>								
								</ul>
								<ul class="navbar-nav ml-auto mt-10">
									<li class="nav-item">
										<a href="add-listing" class="nav-link add-button" href="#"><i class="fas fa-plus-square"></i> Add Listing</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</section>	

		<section class="hero-area bg-1 text-center overly">
			<!-- Container Start -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- Header Contetnt -->
						<div class="content-block">
							<h1>My Club, My Rules</h1>
							<p>Join other reefers in swapping, selling and buying <br> without fear from the internet police</p>
						</div>
					</div>
				</div>
			</div>
			<!-- Container End -->
		</section>		
		
		<?php
	}
	
	
	function content(){
		
	}
	
	function footer(){
		
		?>
		<footer class="footer section section-sm">
		  <!-- Container Start -->
		  <div class="container">
			<div class="row">
			  <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
				<!-- About -->
				<div class="block about">
				  <!-- footer logo -->
				  <img src="<?php echo _IMAGES ?>logo-footer.png" alt="">
				  <!-- description -->
				  <p class="alt-color">MyReef Club is an Opensource, community owned project for listing, selling, buying, swapping reef corals, fish and equipment aimed squarely for the online communities and groups on facebook</p>
				</div>
			  </div>
			  <!-- Link list -->
			  <div class="col-lg-2 offset-lg-1 col-md-3">
				<div class="block">
				  <h4>Site Pages</h4>
				  <ul>
					<li><a href="#">Boston</a></li>
					<li><a href="#">How It works</a></li>
					<li><a href="#">Deals & Coupons</a></li>
					<li><a href="#">Articls & Tips</a></li>
					<li><a href="#">Terms of Services</a></li>
				  </ul>
				</div>
			  </div>
			  <!-- Link list -->
			
			  <!-- Promotion -->
			  <div class="col-lg-4 col-md-7">
				<!-- App promotion -->
				<div class="block-2 app-promotion">
				  <a href="">
					<!-- Icon -->
					<img src="<?php echo _IMAGES ?>footer/phone-icon.png" alt="mobile-icon">
				  </a>
				  <p>Get the Dealsy Mobile App and Save more</p>
				</div>
			  </div>
			</div>
		  </div>
		  <!-- Container End -->
		</footer>
		<!-- Footer Bottom -->
		<footer class="footer-bottom">
			<!-- Container Start -->
			<div class="container">
			  <div class="row">
				<div class="col-sm-6 col-12">
				  <!-- Copyright -->
				  <div class="copyright">
					<p>Copyright © 2016. All Rights Reserved</p>
				  </div>
				</div>
				<div class="col-sm-6 col-12">
				  <!-- Social Icons -->
				  <ul class="social-media-icons text-right">
					  <li><a class="fa fa-facebook" href=""></a></li>
					  <li><a class="fa fa-twitter" href=""></a></li>
					  <li><a class="fa fa-pinterest-p" href=""></a></li>
					  <li><a class="fa fa-vimeo" href=""></a></li>
					</ul>
				</div>
			  </div>
			</div>
			<!-- Container End -->
			<!-- To Top -->
			<div class="top-to">
			  <a id="top" class="" href=""><i class="fa fa-angle-up"></i></a>
			</div>
		</footer>
		</body>

		</html>
		
		<?php
		
	}
	
	function afterLoad(){
		
	}
	
}


?>