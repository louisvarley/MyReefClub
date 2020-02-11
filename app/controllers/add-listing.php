<?php

namespace myReef\controllers;

class addListing extends \myReef\controllers\controller{
	
	function init(){
		
		
	}
	
	function post(){
		
		$data = json_encode($_POST);
		
		/* Generate Listing from JSON */
		$this->listing = new \myReef\models\listing();
		$this->listing->fromJSON($data);
		
		$this->listing->save($_POST['password']);
		
		redirect($this->listing->url);
		die();
		
	}
	
}


?>