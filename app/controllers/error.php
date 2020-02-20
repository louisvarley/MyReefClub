<?php

namespace myReef\controllers;

class error extends \myReef\controllers\controller{
	
	public function init(){
		
		http_response_code(500);
	}
	
}


?>