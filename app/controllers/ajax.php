<?php

namespace myReef\controllers;

class ajax extends \myReef\controllers\controller{
	
	public function init(){
		
		/* Get Correct Part */
		$ajaxPart = (!empty(parts()[2]) ? parts()[2] : null);
		
		/* View Class */
		$this->ajaxClass = "myReef\\classes\\$ajaxPart";
		
		if(!class_exists($this->ajaxClass)) redirect("page-not-found");
		
		/* Create Ajax Class */
		$this->ajax = new $this->ajaxClass;
	
		/* Data Check */
		$this->ajax->dataCheck();
	
		/* Nonce Check */
		$this->ajax->nonceCheck();
		
		/* Initialise */
		$this->ajax->init();
		
	}
	
}


?>