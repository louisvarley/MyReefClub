<?php

namespace myReef\views;

class rss {
	
	function content(){
	?>			
	<?xml version="1.0" encoding="ISO-8859-1"?>
	<rss version="2.0">
		<channel>
			<title>My RSS feed</title>
			<link>http://www.mywebsite.com/</link>
			<description>This is an example RSS feed</description>
			<language>en-us</language>
			<copyright>Copyright (C) 2009 mywebsite.com</copyright>
			<?php if(!($this->listings->empty)){ ?>
				<?php foreach($this->listings->results as $listing) { ?>
				<item>
					<title><?php e($listing->title) ?></title>
					<description><?php e($listing->summary) ?></description>
					<link><?php echo baseURL() . ($listing->url) ?></link>			
					<pubDate>Mon, 23 Feb 2009 09:27:16 +0000</pubDate>
					<image>
						<url><?php echo(isset($listing->images[0]) ? baseURL() . $listing->images[0] : baseURL() . _DEFAULT_IMAGE);	 ?></url>
						<title><?php e($listing->title) ?></title>
						<link><?php echo baseURL() . ($listing->url) ?></link>
					</image>
				</item>
				<?php } ?>
			<?php } ?>
		</channel>
	</rss>		
		

			<?php
			
		}
		
	}

	?>