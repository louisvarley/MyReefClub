<?php

namespace myReef\classes;

class ajax{
	
	public function __construct(){
		
		$this->response =  new \myReef\models\ajaxResponse();
	
	}
	
	public function nonceCheck(){
		
		if(empty($_POST['nonce']) && empty($_GET['nonce'])) $this->response->setCode(3);
		if(!empty($_POST['nonce']) && getNonce() == $_POST['nonce']) $this->response->setCode(0);		
		if(!empty($_GET['nonce']) && getNonce() == $_GET['nonce']) $this->response->setCode(0);
		if(!empty($_POST['nonce']) && getNonce() != $_POST['nonce']) $this->response->setCode(2);		
		if(!empty($_GET['nonce']) && getNonce() != $_GET['nonce']) $this->response->setCode(2);		
		
	}
	
	public function dataCheck(){
		
		if(empty($_POST) && empty($_GET)) $this->response->code = 2;
	}
	
}