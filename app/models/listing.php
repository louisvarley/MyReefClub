<?php

namespace myReef\models;

/* Usage: */
/*

Create new from construct providing details. 
Call SetPassword to Set the Password for the listing
Finally Save to save as a file using the password. 

To Edit call Load on the GUID, make your changes and call save using the password

*/

class listing extends \myReef\models\model{
	
	public $guid;
	public $title;
	public $name;
	public $status;
	public $type;
	public $description;
	public $price;
	public $location;
	public $password;
	public $images = [];

	function __construct($json = null){
		if(!empty($json)) $this->newFromJSON($json);	
	}
	
	private function newFromJSON($json){
		
		$data = (object) json_decode($json);	
		
		$this->guid = (!isset($data->guid) ? guid() : $data->guid);
		$this->created = (!isset($data->created) ? time() : $data->created);
		$this->createdIP = (!isset($data->ipAddress) ? getClientIP() : $data->ipAddress); 
		$this->title = (!empty($data->title) ? $data->title : "");
		$this->name = (!empty($data->name) ? $data->name : "");
		$this->location = (!empty($data->location) ? $data->location : "");
		$this->type  = (!empty($data->type) ? $data->type : "");
		$this->price  = (!empty($data->price) ? $data->price : "");
		$this->description  = (!empty($data->description) ? $data->description : "");	
		$this->images = (!empty($data->images) ? ( is_array($data->images) ? $data->images : json_decode($data->images) ) : []);
		$this->url = "/listing/" . str_replace("+","-",urlencode($this->title)) . '/' . $this->guid;
		$this->status = "live";
	}
	
	private function loadFromJSON($json){
		
		$data = (object) json_decode($json);		
		$this->password = $data->password;
		$this->salt = $data->salt;
		$this->newFromJSON($json);
	}
	
	function setPassword($password){
		
		if( !isset($this->password) ){
			$this->salt = (empty($salt) ? salt() : $salt); 
			$this->password = password_hash($this->salt . $password, PASSWORD_DEFAULT);
		}
	}
	
	function verifyPassword($password){
		
		if(password_verify($this->salt . $password, $this->password)){
			return true;
		}else{
			return false;
		}
	
	}	
	
	function save($password){
		
		if(isset($this->password) && isset($this->salt) && $this->verifyPassword($password)){
		
			$this->edited = time();
			$this->editedIP = getClientIP(); 
			
			if (!file_exists(_LISTINGS_DIR)) mkdir(_LISTINGS_DIR, 0777, true);
			$data = json_encode($this);
			file_put_contents(_LISTINGS_DIR . $this->guid . '.json', $data);
			
			return true;
			
		}
		
		return false;
	}
	
	function load($guid){
		
		if(file_exists(_LISTINGS_DIR . $guid . '.json')){
			$json = file_get_contents(_LISTINGS_DIR . $guid . '.json');
			$this->loadFromJSON($json);
		}else{
			return false;
		}
	}
	
}