<?php

namespace myReef\views;

class rss {
	
	function content(){
	echo '<?xml version="1.0" encoding="utf-8"?>';
	?>			
	<rss version="2.0">
		<channel>
			<title>MyReef Recently Listed</title>
			<link>https://myreef.club</link>
			<description>MyReef Recently Listed</description>
			<language>en-us</language>
			<?php if(!($this->listings->empty)){ ?>
				<?php foreach($this->listings->results as $listing) { ?>
				<item>
					<title><?php e($listing->title) ?> - <?php e(price($listing->price)); ?></title>
					<description>
					<![CDATA[
		<div style="width:100%;">
			<div>
				<div style="position: relative; min-width: 0;word-wrap: break-word;background-color:#fff;background-clip: border-box;border: 0px solid rgba(0, 0, 0, 0.125);border-radius: 0.25rem;">
					<div style="position:relative" style="text-align:center">
						
						<h4 style="text-align:center; margin-bottom:5px;"><a style="font-size:18px; font-weight:600;color:#0d53a9; text-decoration:none;;" href="<?php echo baseURL() . $listing->url ?>"><?php echo e($listing->title); ?></a></h4>
						
						<a href="<?php echo baseURL() . $listing->url ?>">
							<div class="thumb-img" style="height:300px; background-repeat: no-repeat; background-position: center; background-size: 400px; width:100%; background-image: url('<?php echo baseURL() . $listing->getMainImage() ?>');">
								<!--
								<div style="border-radius: 10px;float:left; left: 50%; top: 60px;  transform: translate(-50%, -50%);  position: absolute; background:#0d53a9;color:#fff;display: inline-block;padding: 4px 8px;font-size: 15px;"> <?php e(price($listing->price)) ?></div>
								<div style="border-radius: 10px;float:left; left: 50%; top: 280px; transform: translate(-50%, -50%);  position: absolute; background:#232425;background-color: rgb(35, 36, 37);color:#fff;display: inline-block;padding: 4px 8px;font-size: 15px;background-color:<?php echo stringToColor(($listing->type)); ?>"><?php echo e($listing->type) ?></div>							
								-->
							</div>
						</a>
					</div>
					<div style="text-align:center; padding:20px; flex: 1 1 auto;">
						<h5 style="padding-bottom:20px">Listed <?php echo timeElapsed($listing->created); ?> by <?php echo e($listing->name); ?>, <?php echo e($listing->location); ?></h5>
						<div>
						<?php e($listing->summary); ?>
						</div>
						<a href="<?php echo baseURL() . $listing->url ?>">
							<button style="margin-top:20px; width:50%; font-size: 15px;letter-spacing: 1px;display: inline-block;padding: 15px 30px;border-radius: 4px;	color:#fff;background-color:#0d53a9;border-color:#007bff;font-weight: 400;text-align: center;white-space: nowrap;vertical-align: middle;cursor: pointer;">View</button>	
						</a>
					</div>
				</div>
			</div>
		</div>					
					]]>
					</description>				
					<link><?php echo baseURL() . ($listing->url) ?></link>			
					<pubDate><?php echo rssStamp($listing->created) ?></pubDate>
					<media:content url="<?php echo(isset($listing->images[0]) ? baseURL() . $listing->images[0] : baseURL() . _DEFAULT_IMAGE);	 ?>" width="800" medium="image" />
				</item>
				<?php } ?>
			<?php } ?>
		</channel>
	</rss>		
	<?php
			
		}
		
	}

	?>