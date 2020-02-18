<?php

define('_URL_ROOT','/');
define('_PATH_ROOT',$_SERVER['DOCUMENT_ROOT'] . '/');
define('_STATIC',_URL_ROOT . 'static/');
define('_IMAGES',_STATIC . 'images/');
define('_JS',_STATIC . 'js/');
define('_CSS',_STATIC . 'css/');
define('_LIBS',_STATIC . 'libs/');
define('_APP',_STATIC . 'app/');
define('_UPLOADS_DIR',_PATH_ROOT . 'uploads/');
define('_UPLOADS_URL',_URL_ROOT . 'uploads/');
define('_LISTINGS_DIR',_PATH_ROOT . 'json/listings/');
define('_LISTING_VIEWS_DIR',_PATH_ROOT . 'json/views/');

define('_LISTINGS_URL',_URL_ROOT . 'json/listings/');
define('_BITLY_TOKEN','7101635087a3fc1d3d977b34da94926f35dba436');

define('_DEFAULT_TITLE','MyReef Club | Sales and Swap Listings');
define('_DEFAULT_IMAGE',_IMAGES . 'default.jpg');
define('_DEFAULT_DESCRIPTION','Simple reef listings which you can share with everyone anywhere');

/* Add and Remove FAQ Entries Here */
define('_FAQS',array(

	array(
		'title' 		=> 'How do i create a listing?',
		'description'   => 'Simply click "add listing" and complete the form to create your listing. Once finished you are presented with a link from bit.ly which you can share. You can also share a listing directly from the listing by clicking the share button. ',
	),

	array(
		'title' 		=> 'Is my information safe?',
		'description'   => 'MyReef uses your facebook login purely to assign adverts to you. We do not access or even have access to any personal information about you.',
	),
	array(
		'title' 		=> 'What information about me to you retain?',
		'description'   => 'please see our privacy policy for a list of information we store on our users.',
	),
	array(
		'title' 		=> 'How does editing my listing work?',
		'description'   => 'If you own a listing, it will show under "My Listings" with an edit button. Additionally listings you own will have an edit button on the listing itself. You can edit the details of the listing at anytime.',
	),

	array(
		'title' 		=> 'Why do i have to provide contact information such as my facebook profile when i am logged in?',
		'description'   => 'It is possible for us to request access to more data through facebook but we choose not too. Plus there is a long drawn out review process. Please check our Privacy Policy to see what data we do have access to',
	),	

	array(
		'title' 		=> 'When i add an additional image to my listing i lose my previously uploaded images?',
		'description'   => 'It is only possible to re-add all images using the editor, not append an additional or remove a single image. If you leave the image uploader empty it will keep your current images. If not it will replace them',
	),	

	array(
		'title' 		=> 'My listing map shows a location which is incorrect or inaccurate?',
		'description'   => 'The map of your location is generated purely but your location given, no validation is done so that we do not have to hold that information. Try keeping the location simple such as a near by town, You can also use the first part of your postcode to show an area',
	),	

	array(
		'title' 		=> 'Who created, owns, runs and operates this site?',
		'description'   => 'This site was created as an open source project for the reefing community to quickly list and swap livestock without breaking facebooks livestock rules. The source code for this site is available on <a href="https://github.com/louisvarley/MyReefClub">GitHub</a> and is distributed under GNU GENERAL PUBLIC LICENSE. Please see the contact page for current operator information.',
	),

	array(
		'title' 		=> 'Where is your terms of service and privacy policy pages?',
		'description'   => '<a href="/privacy-policy">Here</a> and <a href="/terms-of-service">Here</a>',
	),
	
));
