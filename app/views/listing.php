<?php

namespace myReef\views;

class listing extends \myReef\views\view{
	
	function inlineJS(){
			
	
		?>
		(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		
		jQuery( document ).ready(function(){
			
	
			jQuery('#share-url').click(function(){		
				jQuery('#hidden-copy-url').val(location.href);
				var copyText = document.getElementById("hidden-copy-url");
				copyText.select();
				copyText.setSelectionRange(0, 99999); /*For mobile devices*/
				document.execCommand("copy");
				
				jQuery(this).html(jQuery(this).html().replace("Copy Link","Copied.."));
				
				
			});
			
		})

		
		
		<?php
	
	}
	
	function content(){
		
		?>	
<section class="section bg-gray">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<!-- Left sidebar -->
			<div class="col-md-8">
				<div class="product-details">
					<h1 class="product-title"><?php e($this->listing->title) ?></h1>
					<div class="product-meta">
						<ul class="list-inline">
							<li class="list-inline-item"><i class="fa fa-user"></i> By <a href=""><?php e($this->listing->name) ?></a></li>
							<li class="list-inline-item"><i class="fa fa-folder"></i> Category<a href=""><?php e($this->listing->type) ?></a></li>
							<li class="list-inline-item"><i class="fa fa-home"></i> Location<a href=""><?php e($this->listing->location) ?></a></li>
						</ul>
					</div>
					<?php if(isset($this->listing->images[0])){ ?>
						<div id="carouselExampleIndicators" class="product-slider carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<?php if(isset($this->listing->images[0])){ ?><li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li></li><?php } ?>
								<?php if(isset($this->listing->images[1])){ ?><li data-target="#carouselExampleIndicators" data-slide-to="1"></li><?php } ?>
								<?php if(isset($this->listing->images[2])){ ?><li data-target="#carouselExampleIndicators" data-slide-to="2"></li><?php } ?>
							</ol>
							<div class="carousel-inner">
								<?php if(isset($this->listing->images[0])){ ?>
								<div class="carousel-item active">
									<img class="d-block w-100" src="<?php echo($this->listing->images[0]) ?>" alt="First slide">
								</div>
								<?php } ?>
								
								<?php if(isset($this->listing->images[1])){ ?>
								<div class="carousel-item">
									<img class="d-block w-100" src="<?php echo($this->listing->images[1]) ?>" alt="Second slide">
								</div>
								<?php } ?>
								
								<?php if(isset($this->listing->images[2])){ ?>
								<div class="carousel-item">
									<img class="d-block w-100" src="<?php echo($this->listing->images[2]) ?>" alt="Third slide">
								</div>
								<?php } ?>
								
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					<?php } ?>
					<div class="content">
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								<h3 class="tab-title">Product Description</h3>
								<?php e($this->listing->description) ?>
							</div>						
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
				
					
					<?php if(userID() == $this->listing->user){ ?>
					<div class="widget text-center">
						<p><a href="/add-listing/<?php echo $this->listing->guid ?>"><button class="btn btn-success">Edit Listing</button></a></p>
					</div>							
					<?php } ?>				
				
					<div class="widget text-center">
					  <div class="fb-share-button" 
						data-href="<?php echo currentURL() ?>" 
						data-layout="button">
					  </div>
					  <button id="share-url" class="btn btn-info btn-tiny"><i class="fa fa-file"></i>Copy Link</button>
					  <input type="text" value="" id="hidden-copy-url">
					</div>					
					<div class="widget price text-center">
						<h4>Price</h4>
						<p>£<?php e($this->listing->price) ?></p>
					</div>											
					<div class="widget map">
						<div class="map">
							<div id="map"></div>
						</div>
					</div>

					<div class="widget text-center">
						<p><button class="btn btn-primary">Contact Seller</button></p>
					</div>						
					
				</div>
			</div>
			
		</div>
	</div>
	<!-- Container End -->
</section>


		<?php
		
	}
	
}


?>