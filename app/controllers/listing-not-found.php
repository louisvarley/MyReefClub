<?php

namespace myReef\controllers;

class listingNotFound extends \myReef\controllers\controller{
	
	public function init(){
		
		http_response_code(404);
	}
	
}


?>