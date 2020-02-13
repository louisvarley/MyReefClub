<?php

namespace myReef\controllers;

class listing extends \myReef\controllers\controller{
	
	public function init(){
		
		/* No GUID Provided */
		if(!isset(parts()[3])) redirect("page-not-found");
		
		/* Extract GUID */
		$this->guid = parts()[3];
		
		$this->view->listing = \myReef\services\listings::getListing($this->guid);
		
		if(!$this->view->listing->found){
			redirect("listing-not-found");
		}
		
		/* Set the Meta for this page */
		$this->title = $this->view->listing->title;
		$this->description = $this->view->listing->description;
		$this->image = isset($this->view->listing->images[0]) ? baseURL() . $this->view->listing->images[0] : _DEFAULT_IMAGE;
		$this->type = "article";
		
	}	
	
}


?>