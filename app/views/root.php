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
					
				<?php

				if($this->listings->empty){
					?>
					
					<div class="col-md-12">
						<div class="section-title">
							<p>No Active Listings</p>
						</div>
					</div>
					
					<?php
				}else{
				?>		
					
					<?php foreach($this->listings->results as $listing) { 	
						
						$i = new \myReef\views\listingBox();
						$i->setListing($listing);
						$i->content();
						
					 } 	
				 } ?>
				</div>
			</div>
		</section>


		<?php
		
	}
	
}


?>