<?php

namespace myReef\controllers;

class root extends \myReef\controllers\controller{
	
	public function init(){
		
		
		$this->view->listings = \myReef\services\listings::getListings(['limit' => 6]);
		
	}
	
}


?>