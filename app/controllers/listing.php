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
		if(!$this->view->listing->load($guid)){
			redirect("listing-not-found");
		}
		
		/* Set the Meta for this page */
		
		$this->view->meta->addMeta(array(
			'og:url' => currentURL(),
			'og:type' => 'article',			
			'og:title' => $this->view->listing->title,
			'og:description' => $this->view->listing->description,
			'og:image' => isset($this->view->listing->images[0]) ? baseURL() . $this->view->listing->images[0] : __DEFAULT_IMAGE,			
			
		));

		
	
	}	
}


?>