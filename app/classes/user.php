<?php

namespace myReef\classes;

class user{
	
	protected static $id;
	protected static $name;
	protected static $email;
	
	static function setUser($user){
		
		self::$id = $user->id;
		self::$name = $user->name;
		self::$email = $user->email;
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
	
	static function unsetUser(){
		
		self::$id = null;
		self::$name = null;
	}
		
	
	
}