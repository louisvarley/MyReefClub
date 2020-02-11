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
					<div class="accordion" id="accordionExample">
					  <div class="card">
						<div class="card-header" id="headingOne">
						  <h2 class="mb-0">
							<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#1" aria-expanded="true" aria-controls="1">
							  How do i create a listing?
							</button>
						  </h2>
						</div>

						<div id="1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						  <div class="card-body">
							Simply click "add listing" and complete the form to create your listing. Once finished you are presented with a link from bit.ly which links to your listing. 
						  </div>
						</div>
					  </div>
					  <div class="card">
						<div class="card-header" id="headingTwo">
						  <h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#2" aria-expanded="true" aria-controls="2">
							  Is my information safe?
							</button>
						  </h2>
						</div>
						<div id="2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						  <div class="card-body">
							While we do suggest not including any personal information in your listing your data is safe. Your listing is saved and can only be edited if you provided a password. All listing expire after 30 days and are completely and permanently removed from the site after this time.
						  </div>
						</div>
					  </div>
					  <div class="card">
						<div class="card-header" id="headingThree">
						  <h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#3" aria-expanded="true" aria-controls="3">
							  How does editing my listing work?
							</button>
						  </h2>
						</div>
						<div id="3" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						  <div class="card-body">
							If you choose to provide a password, you can, at any time, click the "edit" button on your listing. If the password provided matches, you can edit and resubmit your listing or remove it from the site. Your password is not stored in plain text anywhere on the site however, we do recommended using something other than your "normal everyday" password for your listing. 
						  </div>
						</div>
					  </div>
					</div>
					</div>
				</div>
			</div>
		</section>


		<?php
		
	}
	
}


?>