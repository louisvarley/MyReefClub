<?php

namespace myReef\models;

class ajaxResponse{
	
	public $code = 0;
	
	/* Extending Classes add their own errors to this */
	public $errors = array(
		0 => "",
		1 => "No GET or POST Data",
		2 => "Nonce Mismatch",
		3 => "No Nonce Provided",
	);
	
	public function send(){
		header('Content-Type: application/json');
		unset($this->errors);	
		echo json_encode($this);	
		die();
		
	}
	
	public function addErrors($errors){
		
		$this->errors = array_replace($this->errors,$errors);
		
	}
	
	public function setCode($code){
		
		$this->code = $code;
		$this->error = isset($this->errors[$this->code]) ? $this->errors[$this->code] : 'Unknown Error';
		if($this->code > 0) http_response_code(500);
		if($this->code > 0) $this->send();
		
	}
	

	
}