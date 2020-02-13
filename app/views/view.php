<?php

namespace myReef\views;

class view{
	
	
	function beforeLoad(){}
	
	function header(){
		?>
		
		<!DOCTYPE html>
		<html lang="en">
		<head>

		  <meta charset="utf-8">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <title><?php e( isset($this->meta->fetch()->title) ? $this->meta['title'] : _DEFAULT_TITLE); ?></title>

		  <?php if(isset($this->meta)){ ?>
			  <?php foreach($this->meta->fetch() as $key => $meta){		  
				?><meta property="<?php echo $key ?>" content="<?php e($meta) ?>" />
			  <?php  } ?>
		  <?php } ?>
		  

		  <!-- Bootstrap -->
		  <link href="<?php echo _LIBS; ?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		  <!-- Font Awesome -->
		  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">

		  <!-- CUSTOM CSS -->
		  <link href="<?php echo _CSS ?>style.css" rel="stylesheet">

		  <!-- jQuery Filer -->
		  <link href="<?php echo _LIBS ?>jQuery.filer/css/jquery.filer.css" rel="stylesheet">
		  
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
		  <script src="<?php echo _LIBS; ?>jQuery.filer/js/jquery.filer.min.js"></script>		
		  <script src="<?php echo _JS ?>facebook.js"></script>
		  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
		  <script src="https://connect.facebook.net/en_US/all.js"></script>
		  
		  
		  
		<?php if(method_exists($this,'inlineJS')){ ?><script><?php $this->inlineJS(); ?></script><?php } ?>
		<?php if(method_exists($this,'inlineCSS')){ ?><script><?php $this->inlineCSS(); ?></script><?php } ?>
		  
		</head>

		<body class="body-wrapper">

		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-expand-lg  navigation">
							<a class="navbar-brand" href="/">
								<img src="<?php echo _IMAGES ?>logo.png" alt="">
							</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<i class="fas fa-bars"></i>
							<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav ml-auto main-nav ">
									<li class="nav-item active">
										<a href="/" class="nav-link" >Home</a>
									</li>								
									<li class="nav-item active">
										<a class="nav-link" href="/browse-listings">Browse</a>
									</li>
									<?php if(isLoggedIn()){ ?>
									<li class="nav-item">
										<a class="nav-link" href="/my-listings">My Listings</a>
									</li>				
									<?php } ?>
									<li class="nav-item">
										<a class="nav-link" href="/faq">FAQ</a>
									</li>									
									<li class="nav-item">
										<a class="nav-link" href="/contact">Contact</a>
									</li>		
									<li class="nav-item">
										<a class="nav-link" href="/donate">Donate</a>
									</li>										
								</ul>
								<ul class="navbar-nav ml-auto mt-10 side-nav">
									<li class="nav-item">
										<a href="/add-listing" class="nav-link add-button" href="#"><i class="fas fa-plus-square"></i> Add Listing</a>
									</li>
									
									<?php if(!isLoggedIn()){ ?>
									<li class="nav-item">									
										 <a href="#" i class="nav-link login-button" href="#"><i class="fab fa-facebook-square"></i> Login with Facebook</a> 
									</li>
									<?php } ?>
									
									<?php if(isLoggedIn()){ ?> 
									<li class="nav-item">
										<a href="#" i class="nav-link logout-button" href="#">Logout</a>
									</li>
									 <?php } ?>
									 
								
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
							<p>Join other UK reefers in swapping, selling and buying</p>
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
				  <ul>
					<li><a href="/privacy-policy">Privacy Policy</a></li>
					<li><a href="/terms-of-service">Terms of Service</a></li>
				  </ul>
				</div>
			  </div>
			  <!-- Link list -->
			
			  <!-- Promotion -->
			  <div class="col-lg-4 col-md-7">
				<!-- App promotion -->
				<div class="block-2 app-promotion">
				  <a href="https://www.facebook.com/groups/EssexReefClub/">
					<!-- Icon -->
					<i class="fab fa-facebook-square"></i>
				  </a>
				  <a href="https://www.facebook.com/groups/EssexReefClub/">
					<p>Join the Essex Reef Club Facebook Group</p>
				  </a>
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
					<p>Copyright © <?php echo(date("Y")) ?> All Rights Reserved</p>
				  </div>
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