<?php

namespace myReef\controllers;

class controller{
	
	
	function login(){

		if(isset($_COOKIE['fb_me'])){
					
			$user = json_decode($_COOKIE['fb_me']);	

			if(!isset($user->name)){
				unset($_COOKIE['fb_me']);
				redirect("page-not-found");
			}				
					
			login($user);
			
		}else{
						
			logout();

		}

	}
	
}


?>