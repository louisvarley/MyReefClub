<?php

namespace myReef\views;

class listing extends \myReef\views\view{
	
	function content(){
		
	
		
		?>	
		<section class="popular-deals section bg-gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2><?php e($this->listing->title) ?></h2>
							<p><?php e($this->listing->name) ?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-lg-12">
					<?php foreach($this->listing->images as $image){ ?>
					
					<img width="200px" src="<?php echo $image ?>">
					
					<?php } ?>
					</div>
				</div>
			</div>
		</section>


		<?php
		
	}
	
}


?>