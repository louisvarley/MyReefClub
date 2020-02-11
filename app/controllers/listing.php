<?php

namespace myReef\controllers;

class listing extends \myReef\controllers\controller{
	
	public function init(){
		
		if(!isset(parts()[3])) redirect("page-not-found");
		
		$guid = parts()[3];
		$this->view->listing = $this->listing = new \myReef\models\listing();
		$this->view->listing->load($guid);
		
		if(!$this->view->listing->guid){
			redirect("listing-not-found");
		}
		
	}
	
}


?>