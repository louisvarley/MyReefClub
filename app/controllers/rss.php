<?php

namespace myReef\controllers;

class rss extends \myReef\controllers\controller{
	
	public function init(){
		

		/* Content Type */
		header('Content-Type: application/rss+xml; charset=utf-8');
		
		/* Get all Listings */
		$this->view->listings = \myReef\services\listings::getListings();
		
		
	}	
	
}


?>