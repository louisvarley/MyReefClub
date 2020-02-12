<?php

namespace myReef\classes;

class user{
	
	protected static $id;
	protected static $name;
	
	static function setUser($user){
		
		self::$id = $user->id;
		self::$name = $user->name;
	}
	
	static function getID(){
		
		return self::$id;
	}
	
	static function getName(){
		
		return self::$name;
	}
	
	static function unsetUser(){
		
		self::$id = null;
		self::$name = null;
	}
		
	
	
}