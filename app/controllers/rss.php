<?php

namespace myReef\controllers;

class rss extends \myReef\controllers\controller{
	
	public function init(){
		

		/* Content Type */
		header('Content-Type: application/rss+xml; charset=utf-8');
		
		/* Get all Listings */

		/* Only show 10, added in last 24 hours, which are not now sold or pending collection */
		
		$this->view->listings = \myReef\services\listings::getListings(array(
			'limit' => 10, 
			array('property'    => 'status',
				  'comparison'  => 'neq',
				  'value'		=> 'Sold',
			),
			array('property'    => 'status',
				  'comparison'  => 'neq',
				  'value'		=> 'Pending Collection',
			),		
			array('property'    => 'created',
				  'comparison'  => 'gt',
				  'value'		=> time()-86400,
			),						
		));				
		
	}	
	
}


?>