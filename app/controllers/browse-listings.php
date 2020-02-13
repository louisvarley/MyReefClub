<?php

namespace myReef\controllers;

class browseListings extends \myReef\controllers\controller{
	
	public function init(){
		
		
		$this->view->listings = \myReef\services\listings::getListings(array(
			'limit' => 20, 
			array('property'    => 'status',
				  'comparison'  => 'neq',
				  'value'		=> 'Sold',
			),
			array('property'    => 'status',
				  'comparison'  => 'neq',
				  'value'		=> 'Pending Collection',
			)			
		));
		
	}
	
}


?>