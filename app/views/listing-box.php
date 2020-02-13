<?php

namespace myReef\views;

class listingBox extends \myReef\views\view{
	
	
	function setListing($listing){
		
		$this->listing = $listing;
	}
	
	function content(){
		
		
		?>	
		
		<div class="col-sm-12 col-lg-4">
			<!-- product card -->
			<div class="product-item bg-light">
				<div class="card">
					<div class="thumb-content">
						<div class="price">£ <?php echo e($this->listing->price) ?></div>
						<div class="type"><?php echo e($this->listing->type) ?></div>
						<div class="status"><?php echo e($this->listing->status) ?></div>
						<a href="<?php echo $this->listing->url ?>">
							<div class="thumb-img" style="background-image: url('<?php echo $this->listing->images[0] ?>');"></div>
							<!--<img class="card-img-top img-fluid" src="<?php echo $this->listing->images[0] ?>" alt="Card image cap">-->
						</a>
					</div>
					<div class="card-body">
						<?php if(userID() == $this->listing->user){ ?>
							<p><a href="/add-listing/<?php echo $this->listing->guid ?>"><button class="btn btn-success btn-tiny">Edit Listing</button></a></p>
						<?php } ?>
						<h4 class="card-title"><a href="<?php echo $this->listing->url ?>"><?php echo e($this->listing->title); ?></a></h4>

						<ul class="list-inline product-meta">
							<li class="list-inline-item">
								<a href=""><i class="fa fa-clock"></i><?php echo timeElapsed($this->listing->created); ?></a>
							</li>
							<li class="list-inline-item">
								<a href=""><i class="fa fa-user"></i><?php echo e($this->listing->name); ?></a>
							</li>		
							<li class="list-inline-item">
								<a href=""><i class="fa fa-home"></i><?php echo e($this->listing->location); ?></a>
							</li>											
						</ul>
						<?php e($this->listing->summary); ?>
						
					</div>
				</div>
			</div>
		</div>
		
		<?php

	}
	
}


?>