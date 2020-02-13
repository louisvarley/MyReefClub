<?php

namespace myReef\views;

class myListings extends \myReef\views\view{
	
	function content(){
		
		
		
		?>	
		<section class="popular-deals section bg-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>My Listings</h2>
							<p><?php echo $this->listings->count; ?> Listings</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- offer 01 -->
					
				<?php

				if($this->listings->empty){
					?>
					
					<div class="col-md-12">
						<div class="section-title">
							<p>No Listings</p>
						</div>
					</div>
					
					<?php
				}else{
				?>				
					
					
					<?php foreach($this->listings->results as $listing) { ?>	
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
										<p><a href="/add-listing/<?php echo $listing->guid ?>"><button class="btn btn-success btn-tiny">Edit Listing</button></a></p>
										<h4 class="card-title"><a href="<?php echo $listing->url ?>"><?php echo e($listing->title); ?></a></h4>

										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href=""><i class="fa fa-clock"></i><?php echo timeElapsed($listing->created); ?></a>
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
				<?php } ?>
				</div>
			</div>
		</section>


		<?php
		
	}
	
}


?>