<?php

namespace myReef\controllers;

class addListing extends \myReef\controllers\controller{
	
	function init(){
		
		
	}
	
	function post(){
		
		$data = json_encode($_POST);
		
		/* Generate Listing from JSON */
		$this->listing = new \myReef\models\listing($data);
		
		/* Set the Password */
		$this->listing->setPassword($_POST['password']);
		
		/* Save as File */
		
		var_dump($_POST);
		
		$this->listing->save($_POST['password']);
		
		/* Send user to their listing */
		redirect($this->listing->url);
		die();
		
	}
	
}


?>