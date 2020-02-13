<?php

namespace myReef\views;

class addListing extends \myReef\views\view{
	
	function inlineJS(){

		?>
		
		var checkLength = function (){
				
			if(jQuery('#summary').val().length > 120) jQuery('#summary').val(jQuery('#summary').val().substring(0, jQuery('#summary').val().length - 1))
			x = 120 - jQuery('#summary').val().length;
			jQuery('#summary-count').html(x + " remaining");
		}
		
		jQuery( document ).ready(function(){
			
			jQuery('#summary').bind('input propertychange', function() {
				checkLength();
			});
			
			checkLength();
		});
		
		jQuery( document ).ready(function(){
			
			var imageUploads = [];
			
			jQuery('#new-listing').submit(function() {
			  jQuery("<input />").attr("type", "hidden")
				.attr("name", "images")
				.attr("value", JSON.stringify(imageUploads))
				.appendTo(this);
				return true;
			});			
			
			filer_default_opts = {
				dragDrop: {},
				uploadFile: {
					url: "/ajax/imageUploader",
					data: {nonce: "<?php echo getNonce() ?>"},
					type: 'POST',
					enctype: 'multipart/form-data',
					beforeSend: function(){},
					success: function(data, el){
						var parent = el.find(".jFiler-jProgressBar").parent();
						el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
							$("<div class=\"jFiler-item-others text-success\"><i class=\"icon-jfi-check-circle\"></i> Success</div>").hide().appendTo(parent).fadeIn("slow");
						});

						imageUploads.push(data.url);	
						
					},
					error: function(el){
						var parent = el.find(".jFiler-jProgressBar").parent();
						el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
							$("<div class=\"jFiler-item-others text-error\"><i class=\"icon-jfi-minus-circle\"></i> Error</div>").hide().appendTo(parent).fadeIn("slow");
						});
					},
					statusCode: null,
					onProgress: null,
					onComplete: null
				}
		  

			}
		})

		jQuery( document ).ready(function() {
			$('#filer_input').filer({
				limit: 3,
				maxSize: 10,
				extensions: ['jpg', 'jpeg', 'png', 'gif'],
				changeInput: true,
				showThumbs: true,
				addMore: true,
				dragDrop: filer_default_opts.dragDrop,
				uploadFile: filer_default_opts.uploadFile				
			});
		});
		



		<?php
	
	}
	
	function isEdit(){
		
		return $this->mode == "edit" ? true : false;
		
	}
	
	
	function content(){
	
		?>	
		<section class="popular-deals section bg-gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2><?php echo($this->isEdit() ? 'Edit Listings' : 'Add a New Listings'); ?></h2>
							<p><?php echo($this->isEdit() ? 'Edit and Update Your Listing' : 'Create a New Listings'); ?></p>
						</div>
					</div>
				</div>
				<?php if(!isLoggedIn()){ ?>
				<div class="row login-banner">
					<div class="col-lg-12 col-lg-12">
						<div class="form-group">
							<label class="col-lg-12 control-label" for="title">You must be logged in to create your listing</label>  
							<div class="col-lg-12">
								 <a href="#" i class="nav-link login-button" href="#"><i class="fab fa-facebook-square"></i> Login with Facebook</a>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				<div class="row">
					<div class="col-lg-12 col-lg-12">
				
						<?php if(isLoggedIn()){ ?>
						<form id="new-listing" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
							<fieldset>

							<!-- Form Name -->
							<div class="col-lg-12">
								<legend><?php e($this->isEdit() ? "Edit Listing" : "New Listing"); ?></legend>
							</div>
							
							<?php if($this->isEdit()){ ?>
								<input id="textinput" name="guid" type="hidden" value="<?php echo $this->listing->guid ?>">
							<?php } ?>
							
							<!-- Text input-->
							<div class="form-group">
							  <label class="col-lg-12 control-label" for="title">Listing Title *</label>  
							  <div class="col-lg-12">
							  <input required="" id="textinput" name="title" type="text" placeholder="Title describing your listing" class="form-control input-lg" value="<?php e($this->isEdit() ? $this->listing->title : ""); ?>">
							  </div>
							</div>
							
							<!-- Select Basic -->
							<div class="form-group">
							  <label class="col-lg-12 control-label" for="type">Status *</label>
							  <label class="col-lg-12 control-hint">Status of your listing, you can change this at a later date.</label>
							  <div class="col-lg-12">
								<select required="" id="selectbasic" name="status" class="form-control">
								  <option <?php e($this->isEdit() && $this->listing->type == "For Sale" ? "selected" : ""); ?> value="For Sale">For Sale</option>
								  <option <?php e($this->isEdit() && $this->listing->type == "Pending Collection" ? "selected" : ""); ?> value="Pending Collection">Pending Collection</option>
								  <option <?php e($this->isEdit() && $this->listing->type == "Sold" ? "selected" : ""); ?> value="Sold">Sold</option>
								</select>
							  </div>
							</div>							

							<!-- Text input-->
							<div class="form-group">
							  <label class="col-lg-12 control-label" for="name">Name *</label>  
							  <div class="col-lg-12">
							  <input required="" id="textinput" name="name" type="text" placeholder="Your name" class="form-control input-lg" value="<?php e($this->isEdit() ? $this->listing->name : userName()); ?>">
							  </div>
							</div>
							
							<!-- Text input-->
							<div class="form-group">
							  <label class="col-lg-12 control-label" for="name">Contact *</label>  
							  <label class="col-lg-12 control-hint">How should potential buyers contact you?</label>
							  <label class="col-lg-12 control-hint">You could include an email, a mobile number, a link to your facebook profile, or ask the user to find you on a facebook group</label>
							  <div class="col-lg-12">
							  <input required="" id="textinput" name="contact" type="text" placeholder="Example: I'm on Essex Reef Group" class="form-control input-lg" value="<?php e($this->isEdit() ? $this->listing->contact : ""); ?>">
							  </div>
							</div>							

							<!-- Text input-->
							<div class="form-group">
							  <label class="col-lg-12 control-label" for="location">Location *</label>  
							  <label class="col-lg-12 control-hint">We will provide a map of your location using this information.</label>
							  <div class="col-lg-12">
							  <input required="" id="textinput" name="location" type="text" placeholder="Where can this listing be collected" class="form-control input-lg" value="<?php e($this->isEdit() ? $this->listing->location : ""); ?>">
								
							  </div>
							</div>

							<!-- Select Basic -->
							<div class="form-group">
							  <label class="col-lg-12 control-label" for="type">Type *</label>
							  <div class="col-lg-12">
								<select required="" id="selectbasic" name="type" class="form-control">
								  <option <?php e($this->isEdit() && $this->listing->type == "Coral SPS" ? "selected" : ""); ?> value="Coral SPS">Coral SPS</option>
								  <option <?php e($this->isEdit() && $this->listing->type == "Coral LPS" ? "selected" : ""); ?> value="Coral LPS">Coral LPS</option>
								  <option <?php e($this->isEdit() && $this->listing->type == "Coral Soft" ? "selected" : ""); ?> value="Coral Soft">Coral Soft</option>
								  <option <?php e($this->isEdit() && $this->listing->type == "Equipment" ? "selected" : ""); ?> value="Equipment">Equipment</option>
								  <option <?php e($this->isEdit() && $this->listing->type == "Fish" ? "selected" : ""); ?> value="Fish">Fish</option>
								  <option <?php e($this->isEdit() && $this->listing->type == "Invert" ? "selected" : ""); ?> value="Invert">Invert</option>
								  <option <?php e($this->isEdit() && $this->listing->type == "Tank Breakdown" ? "selected" : ""); ?> value="Tank Breakdown">Tank Breakdown</option>
								  <option <?php e($this->isEdit() && $this->listing->type == "Various" ? "selected" : ""); ?> value="Various">Various</option>
								  <option <?php e($this->isEdit() && $this->listing->type == "Service" ? "selected" : ""); ?> value="Service">Service</option>
								  <option <?php e($this->isEdit() && $this->listing->type == "Sundries" ? "selected" : ""); ?> value="Sundries">Sundries</option>
								</select>
							  </div>
							</div>

							<!-- Textarea -->
							<div class="form-group">
							  <label class="col-lg-12 control-label" for="description">Summary *</label>
							  <label class="col-lg-12 control-hint">Provide a short summary of what you have for sale.</label>
							  <span id="summary-count" class="col-lg-12">120 Remaining</span>
							  
							  <div class="col-lg-12">                     
								<textarea maxlegth="120" required="" rows="4" class="form-control" id="summary" name="summary"><?php e($this->isEdit() ? $this->listing->summary : ""); ?></textarea>
							  </div>
							</div>							
							
							<!-- Textarea -->
							<div class="form-group">
							  <label class="col-lg-12 control-label" for="description">Description *</label>
							  <label class="col-lg-12 control-hint">Longer description, describe as best you can with any includes details, extras and damages a buyer should be aware of.</label>
							  <div class="col-lg-12">                     
								<textarea required="" rows="4" class="form-control" id="description" name="description"><?php e($this->isEdit() ? $this->listing->description : ""); ?></textarea>
							  </div>
							</div>

							<!-- Button Drop Down -->
							<div class="form-group">
							  <label class="col-lg-12 control-label" for="price">Price *</label>
							  <div class="col-lg-12">
								<div class="input-group">
								  <input required="" id="appendedtext" name="price" class="form-control" placeholder="10.00" type="text" value="<?php e($this->isEdit() ? $this->listing->price : ""); ?>">
								  <span class="input-group-addon">£</span>
								</div>
								
							  </div>
							</div>

							<div class="form-group">
							  <label class="col-lg-12 control-label" for="files[]">Images</label>
							  <?php if($this->isEdit()){ ?>
								<label class="col-lg-12 control-warning">If you add new images, these will replace your previous images saved for your listing. Leave blank to retain your current images.</label>
							  <?php } ?>
							  <div class="col-lg-12">
								<input type="file" name="files[]" id="filer_input" multiple="multiple">
								<span class="help-block">Upload up to 3 images to your listing</span>
							  </div>
							</div>

							<div class="form-group">
							 <label class="col-lg-12 control-label"><h4>By submitting your listing, you are agreeing that you have read and fully agree to our <a href="/terms-of-service">Terms of Service</a></h4></label>
							</div>
							
							<div class="form-group">
							  <label class="col-lg-12 control-label" for="button1id"></label>
							  <div class="col-lg-12">
								<button id="button1id" class="btn btn-success">Submit Listing</button>
							  </div>
							</div>

							</fieldset>
						</form>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>


		<?php
		
	}
	
}


?>