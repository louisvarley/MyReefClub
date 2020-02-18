<?php

namespace myReef\views;

class rss {
	
	function content(){
	echo '<?xml version="1.0" encoding="utf-8"?>';
	?>			
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
					<description>
					<![CDATA[<img align="left" hspace="5" src="<?php echo(isset($listing->images[0]) ? baseURL() . $listing->images[0] : baseURL() . _DEFAULT_IMAGE);	 ?>"/>
					<?php e($listing->summary) ?>'... <br />]]>
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