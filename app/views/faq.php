<?php

namespace myReef\views;

class faq extends \myReef\views\view{
	
	function content(){
		
		?>	
		<section class="popular-deals section bg-gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>FAQ</h2>
							<p>Questions and Answers</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-lg-12">
						<div class="accordion" id="faq">
							<?php
							
							foreach(_FAQS as $n => $faq ){
								
								?>
								<div class="card">
									<div class="card-header" id="heading<?php echo $n ?>">
									  <h2 class="mb-0">
										<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#<?php echo $n ?>" aria-expanded="false" aria-controls="<?php echo $n ?>">
										  <?php echo $faq['title']; ?>
										</button>
									  </h2>
									</div>

									<div id="<?php echo $n ?>" class="collapse " aria-labelledby="heading<?php echo $n ?>" data-parent="#faq">
									  <div class="card-body">
										<?php echo $faq['description']; ?>
									  </div>
									</div>
								</div>
								
								<?php
								
							}
							
							?>
						</div>
					</div>
				</div>
			</div>
		</section>


		<?php
		
	}
	
}


?>