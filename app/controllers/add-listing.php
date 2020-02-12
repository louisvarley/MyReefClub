<?php

namespace myReef\controllers;

class addListing extends \myReef\controllers\controller{
	
	function init(){
		
		
		if(isset(parts()[2])){
			
			$guid = parts()[2];
			
			$this->view->listing = $this->listing = new \myReef\models\listing();
		
			/* Load Given GUID if found and user ID matches */
			if(!$this->view->listing->load($guid) || $this->view->listing->user != userID()){
				redirect("listing-not-found");
			}
			
			$this->view->mode = "edit";
				
		}else{
			$this->view->mode = "new";
		}

		
	}
	
	function post(){
		
		$data = ($_POST);	
	
		if(isset($data['guid'])){
		
			$listing = new \myReef\models\listing();
			$listing->load($data['guid']);
			if($data['images'] == '[]') $data['images'] = $listing->images;
			$data['user'] = $listing->user;
			
		}
		
		/* Encode Data */
		$data = json_encode($data);	
		
		/* Generate Listing from JSON */
		$this->listing = new \myReef\models\listing($data);
		
		/* Will Return a BOOL depending on save success */
		$this->listing->save();
		
		/* Send user to their listing */
		redirect($this->listing->url);
		die();
		
	}
	
}


?>