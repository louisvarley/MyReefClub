<?php

namespace myReef\controllers;

class pageNotFound extends \myReef\controllers\controller{
	
	public function init(){
		
		http_response_code(404);
	}
	
}


?>