<?php

namespace myReef\controllers;

class listing extends \myReef\controllers\controller{
	
	public function init(){
		
		/* No GUID Provided */
		if(!isset(parts()[3])) redirect("page-not-found");
		
		/* Extract GUID */
		$guid = parts()[3];
		
		/* New Empty Listing */
		$this->view->listing = $this->listing = new \myReef\models\listing();
		
		/* Load Given GUID if found */
		if($this->view->listing->load($guid)){
			redirect("listing-not-found");
		};
	
	}	
}


?>