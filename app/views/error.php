<?php

namespace myReef\views;

class error extends \myReef\views\view{
	
	function content(){
		
		
		
		?>	
		<section class="popular-deals section bg-gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>500 - something went wrong</h2>
							<p><?php echo (isset($this->message) ? base64_decode($this->message) : "Please try again"); ?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-lg-12">
						
					</div>
				</div>
			</div>
		</section>


		<?php
		
	}
	
}


?>