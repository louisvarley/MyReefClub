<?php

namespace myReef\models;

class listing extends \myReef\models\model{
	
	public $guid;
	public $title;
	public $name;
	public $type;
	public $description;
	public $price;
	public $location;
	public $password;
	public $images = [];
	
	public $locked = true;
	
	function fromJSON($json){
		
		$data = (object) json_decode($json);	
		
		$this->guid = (!isset($data->guid) ? guid() : $data->guid);
		$this->created = (!isset($data->created) ? time() : $data->created);
		$this->createdIP = (!isset($data->ipAddress) ? getClientIP() : $data->ipAddress); 
		$this->salt = (!isset($data->salt) ? salt() : $data->salt); 		

		$this->title = (!empty($data->title) ? $data->title : "");
		$this->name = (!empty($data->name) ? $data->name : "");
		$this->location = (!empty($data->location) ? $data->location : "");
		$this->type  = (!empty($data->type) ? $data->type : "");
		$this->price  = (!empty($data->price) ? $data->price : "");
		$this->description  = (!empty($data->description) ? $data->description : "");	
		$this->images = (!empty($data->images) ? json_decode($data->images) : []);
		$this->password = (!empty($data->password) ? password_hash($this->salt . $data->password, PASSWORD_BCRYPT, array('cost'=>12)) : "");	
		$this->url = "/listing/" . str_replace("+","-",urlencode($this->title)) . '/' . $this->guid;
		
	}
	
	function save($password){
		
		$this->verifyPassword($password);
		
		if($this->$locked) return;
		
		$this->edited = time();
		$this->editedIP = getClientIP(); 
		
		if (!file_exists(_LISTINGS_DIR)) mkdir(_LISTINGS_DIR, 0777, true);
		$data = json_encode($this);
		file_put_contents(_LISTINGS_DIR . $this->guid . '.json', $data);
		
	}
	
	function load($guid){
		
		if(file_exists(_LISTINGS_DIR . $guid . '.json')){
			$json = file_get_contents(_LISTINGS_DIR . $guid . '.json');
			$this->fromJSON($json);
		}else{
			return false;
		}
	}
	
	function verifyPassword($password){
		
		if(password_verify($this->salt . $password, $this->password)){
			$this->locked = false;
		}else{
			$this->locked = true;
			return false;
		};
	}
	
	
	
}