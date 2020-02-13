<?php

namespace myReef\views;

class donate extends \myReef\views\view{
	
	function content(){
		
		?>	
		<section class="popular-deals section bg-gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Donate</h2>
							<p>Give a guy a break</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h4>It's free for you, but not for me</h4>
							<p>Running MyReef is not free. I pay an annual fee for the domain name, hosting and the SSL certficate.</p>
							<p>You can ease that burden by buying me a coffee! offering me a frag or just reaching out and saying thanks!</p>
						</div>
					</div>
					
					<div class="col-lg-12">
						<div class="section-title">
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
							<input type="hidden" name="cmd" value="_s-xclick" />
							<input type="hidden" name="hosted_button_id" value="LN2Z9ULNPUANL" />
							<input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
							<img alt="" border="0" src="https://www.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1" />
							</form>
						</div>
					</div>
				</div>	
			</div>
		</section>


		<?php
		
	}
	
}


?>