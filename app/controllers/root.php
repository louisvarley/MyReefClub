<?php

namespace myReef\controllers;

class root extends \myReef\controllers\controller{
	
	public function init(){
		
		
		$this->view->listings = \myReef\services\listings::getListings(array(
			'limit' => 6, 
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