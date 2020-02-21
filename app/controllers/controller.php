<?php

namespace myReef\controllers;

class controller{
	
	function login(){
		
		if(isset($_COOKIE['fb_me'])){
		
			$user = json_decode($_COOKIE['fb_me']);	

			if(!isset($user->name)){
				logout();
				error("Something went wrong logging you in, please try again");
			}				
			
			
			if(!isset($user->email)){
				
				logout();
				error("Something went wrong logging you in, please try again");
			}				
								
			login($user);
			
		}else{
			

						
			logout();

		}

	}
	
}


?>