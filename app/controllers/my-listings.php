<?php

namespace myReef\controllers;

class myListings extends \myReef\controllers\controller{
	
	public function init(){
		
		if(empty(userID())){
			redirect('page-not-found');
		}
		
		$this->view->listings = \myReef\services\listings::getListings(array(
			'limit' => 6, 
			array('property'    => 'user',
				  'comparison'  => 'eq',
				  'value'		=> userID(),
			)
		));
		
	}
	
}


?>