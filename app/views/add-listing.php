<?php

namespace myReef\views;

class addListing extends \myReef\views\view{
	
	function inlineJS(){

		?>
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
				maxSize: 3,
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
						<form id="new-listing" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
							<fieldset>

							<!-- Form Name -->
							<legend>New Listing</legend>
							
							<!-- Text input-->
							<div class="form-group">
							  <label class="col-lg-12 control-label" for="title">Listing Title *</label>  
							  <div class="col-lg-12">
							  <input required="" id="textinput" name="title" type="text" placeholder="Short title describing your listing" class="form-control input-lg">
								
							  </div>
							</div>

							<!-- Text input-->
							<div class="form-group">
							  <label class="col-lg-12 control-label" for="name">Name *</label>  
							  <div class="col-lg-12">
							  <input required="" id="textinput" name="name" type="text" placeholder="Your name" class="form-control input-lg">
								
							  </div>
							</div>

							<!-- Text input-->
							<div class="form-group">
							  <label class="col-lg-12 control-label" for="location">Location *</label>  
							  <div class="col-lg-12">
							  <input required="" id="textinput" name="location" type="text" placeholder="Where can this listing be collected" class="form-control input-lg">
								
							  </div>
							</div>

							<!-- Select Basic -->
							<div class="form-group">
							  <label class="col-lg-12 control-label" for="type">Type *</label>
							  <div class="col-lg-12">
								<select required="" id="selectbasic" name="type" class="form-control">
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
							  <label class="col-lg-12 control-label" for="description">Description *</label>
							  <div class="col-lg-12">                     
								<textarea required="" rows="4" class="form-control" id="description" name="description"></textarea>
							  </div>
							</div>

							<!-- Button Drop Down -->
							<div class="form-group">
							  <label class="col-lg-12 control-label" for="price">Price *</label>
							  <div class="col-lg-12">
								<div class="input-group">
								  <input required="" id="appendedtext" name="price" class="form-control" placeholder="0.00" type="text">
								  <span class="input-group-addon">£</span>
								</div>
								
							  </div>
							</div>

							<!-- Password input-->
							<div class="form-group">
							  <label class="col-lg-12 control-label" for="password">Password</label>
							  <div class="col-lg-12">
								<input id="passwordinput" name="password" type="password" placeholder="password" class="form-control input-lg">
								<span class="help-block">Set a password if you want to edit your listing after listing</span>
							  </div>
							</div>

							<!-- Password input-->
							<div class="form-group">
							  <label class="col-lg-12 control-label" for="files[]">Images</label>
							  <div class="col-lg-12">
								<input type="file" name="files[]" id="filer_input" multiple="multiple">
								<span class="help-block">Upload up to 3 images to your listing</span>
							  </div>
							</div>

							<div class="form-group">
							  <label class="col-lg-12 control-label" for="button1id"></label>
							  <div class="col-lg-12">
								<button id="button1id" class="btn btn-success">Submit Listing</button>
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