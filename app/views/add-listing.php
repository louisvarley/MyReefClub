<?php

namespace myReef\views;

class addListing extends \myReef\views\main{
	
	function inlineJS(){

		?>
		jQuery( document ).ready(function() {
			$('#filer_input').filer({
				limit: 3,
				maxSize: 3,
				extensions: ['jpg', 'jpeg', 'png', 'gif'],
				changeInput: true,
				showThumbs: true,
				addMore: true
			});
		});
		<?php
	
	}
	
	function content(){
		
		?>	
		<section class="popular-deals section bg-gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Add a New Listings</h2>
							<p>Generate a new listing</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-lg-12">
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
							<fieldset>

							<!-- Form Name -->
							<legend>New Listing</legend>

							<!-- Text input-->
							<div class="form-group">
							  <label class="col-lg-12 control-label" for="textinput">Listing Title *</label>  
							  <div class="col-lg-12">
							  <input required="" id="textinput" name="textinput" type="text" placeholder="Short title describing your listing" class="form-control input-lg">
								
							  </div>
							</div>

							<!-- Text input-->
							<div class="form-group">
							  <label class="col-lg-12 control-label" for="textinput">Name *</label>  
							  <div class="col-lg-12">
							  <input required="" id="textinput" name="textinput" type="text" placeholder="Your name" class="form-control input-lg">
								
							  </div>
							</div>

							<!-- Text input-->
							<div class="form-group">
							  <label class="col-lg-12 control-label" for="textinput">Location *</label>  
							  <div class="col-lg-12">
							  <input required="" id="textinput" name="textinput" type="text" placeholder="Where can this listing be collected" class="form-control input-lg">
								
							  </div>
							</div>

							<!-- Select Basic -->
							<div class="form-group">
							  <label class="col-lg-12 control-label" for="selectbasic">Type *</label>
							  <div class="col-lg-12">
								<select required="" id="selectbasic" name="selectbasic" class="form-control">
								  <option value="Coral SPS">Coral SPS</option>
								  <option value="Coral LPS">Coral LPS</option>
								  <option value="Coral Soft">Coral Soft</option>
								  <option value="Equipment">Equipment</option>
								  <option value="Fish">Fish</option>
								  <option value="Invert">Invert</option>
								  <option value="Tank Breakdown">Tank Breakdown</option>
								  <option value="Various">Various</option>
								  <option value="Service">Service</option>
								  <option value="Sundries">Sundries</option>
								</select>
							  </div>
							</div>

							<!-- Textarea -->
							<div class="form-group">
							  <label class="col-lg-12 control-label" for="textarea">Description *</label>
							  <div class="col-lg-12">                     
								<textarea required="" rows="4" class="form-control" id="textarea" name="textarea">Include all relevent information. What you are listing, the condition. Anything that should be noted. </textarea>
							  </div>
							</div>

							<!-- Button Drop Down -->
							<div class="form-group">
							  <label class="col-lg-12 control-label" for="appendedtext">Price *</label>
							  <div class="col-lg-12">
								<div class="input-group">
								  <input required="" id="appendedtext" name="appendedtext" class="form-control" placeholder="0.00" type="text">
								  <span class="input-group-addon">£</span>
								</div>
								
							  </div>
							</div>

							<!-- Password input-->
							<div class="form-group">
							  <label class="col-lg-12 control-label" for="passwordinput">Password</label>
							  <div class="col-lg-12">
								<input id="passwordinput" name="passwordinput" type="password" placeholder="password" class="form-control input-lg">
								<span class="help-block">Set a password if you want to edit your listing after listing</span>
							  </div>
							</div>

							<!-- Password input-->
							<div class="form-group">
							  <label class="col-lg-12 control-label" for="passwordinput">Images</label>
							  <div class="col-lg-12">
								<input type="file" name="files[]" id="filer_input" multiple="multiple">
								<span class="help-block">Upload up to 3 images to your listing</span>
							  </div>
							</div>

							

							<!-- Button (Double) -->
							<div class="form-group">
							  <label class="col-lg-12 control-label" for="button1id"></label>
							  <div class="col-lg-12">
								<button id="button1id" name="button1id" class="btn btn-success">Submit Listing</button>
								<button id="button2id" name="button2id" class="btn btn-info">Save Listing</button>
							  </div>
							</div>

							</fieldset>

					</div>
				</div>
			</div>
		</section>


		<?php
		
	}
	
}


?>