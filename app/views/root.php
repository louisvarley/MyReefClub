<?php

namespace myReef\views;

class root extends \myReef\views\view{
	
	function content(){
		
		
		
		?>	
		<section class="popular-deals section bg-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Recent Listings</h2>
							<p>Look at the latest listings on the site</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- offer 01 -->
					
				<?php foreach($this->listings as $listing) { ?>	
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
						<div class="product-item bg-light">
							<div class="card">
								<div class="thumb-content">
									<div class="price">£ <?php echo e($listing->price) ?></div>
									<div class="type"><?php echo e($listing->type) ?></div>
									<div class="status"><?php echo e($listing->status) ?></div>
									<a href="<?php echo $listing->url ?>">
										<div class="thumb-img" style="background-image: url('<?php echo $listing->images[0] ?>');"></div>
										<!--<img class="card-img-top img-fluid" src="<?php echo $listing->images[0] ?>" alt="Card image cap">-->
									</a>
								</div>
								<div class="card-body">
									<h4 class="card-title"><a href="<?php echo $listing->url ?>"><?php echo e($listing->title); ?></a></h4>
									<ul class="list-inline product-meta">
										<li class="list-inline-item">
											<a href=""><i class="fa fa-clock"></i><?php echo timeElapsed(strtotime($listing->created)); ?></a>
										</li>
										<li class="list-inline-item">
											<a href=""><i class="fa fa-user"></i><?php echo e($listing->name); ?></a>
										</li>		
										<li class="list-inline-item">
											<a href=""><i class="fa fa-home"></i><?php echo e($listing->location); ?></a>
										</li>											
									</ul>
									<?php e($listing->summary); ?>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>						
				</div>
			</div>
		</section>


		<?php
		
	}
	
}


?>