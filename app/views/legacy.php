<?php

namespace myReef\views;

class legacy extends \myReef\views\view{
	

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
					<h4><?php echo($this->listing->summary) ?></h4>
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
							</ol>
							<div class="carousel-inner">
								<?php if(isset($this->listing->images[0])){ ?>
								<div class="carousel-item active">
									<img class="d-block w-100" src="/<?php echo($this->listing->images[0]) ?>" alt="First slide">
								</div>
								<?php } ?>
							</div>
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
					<div class="widget price text-center">
						<h4>Price</h4>
						<p>£<?php e($this->listing->price) ?></p>
					</div>											
					<div class="widget map">
						<div class="map">
							<div id="map">
								<iframe width="320px" height="300" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=<?php e(urlencode($this->listing->location)) ?>&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
							</div>
						</div>
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