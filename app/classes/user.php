<?php

namespace myReef\classes;

class user{
	
	protected static $id;
	protected static $name;
	protected static $email;
	protected static $picture;
	
	static function setUser($user){
		
		self::$id = $user->id;
		self::$name = $user->name;
		self::$email = $user->email;
		self::$picture = $user->picture;
	
	}
	
	static function getID(){
		
		return self::$id;
	}
	
	static function getName(){
		
		return self::$name;
	}
	
	static function getEmail(){
		return self::$email;
	}
	
	static function getPicture(){
		
		if(isset(self::$picture->data->url)){
			return self::$picture->data->url;
		}else{
			return _DEFAULT_PROFILE_IMG;
		}
	}	
	
	static function unsetUser(){
		
		self::$id = null;
		self::$name = null;
	}
	
	
		
	
	
}