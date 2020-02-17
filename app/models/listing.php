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
	public $user;
	public $summary;
	public $bitly;
	public $contact;
	public $images = [];
	
	public $found = false;

	function __construct($json = null){
		if(!empty($json)) $this->newFromJSON($json);	
	}
	
	private function newFromJSON($json){
		$this->found = true;
		
		$data = (object) json_decode($json);	
		$this->guid = (!isset($data->guid) ? guid() : $data->guid);
		$this->created = (!empty($data->created) ? $data->created : time());
		$this->createdIP = (!isset($data->ipAddress) ? getClientIP() : $data->ipAddress); 
		$this->title = (!empty($data->title) ? $data->title : "");
		$this->name = (!empty($data->name) ? $data->name : "");
		$this->location = (!empty($data->location) ? $data->location : "");
		$this->type  = (!empty($data->type) ? $data->type : "");
		$this->status  = (!empty($data->status) ? $data->status : "");	
		$this->summary  = (!empty($data->summary) ? $data->summary : "");		
		$this->contact  = (!empty($data->contact) ? $data->contact : "");			
		$this->user  = (!empty($data->user) ? $data->user : "");		
		$this->bitly  = (!empty($data->bitly) ? $data->bitly : "");				
		$this->price  = (!empty($data->price) ? $data->price : "");
		$this->description  = (!empty($data->description) ? $data->description : "");	
		$this->images = (!empty($data->images) ? ( is_array($data->images) ? $data->images : json_decode($data->images) ) : []);
		$this->url = "/listing/" . str_replace("+","-",urlencode($this->title)) . '/' . $this->guid;		
	}
	
	private function loadFromJSON($json){
		
		$data = (object) json_decode($json);		
		$this->newFromJSON($json);
	}

	
	/* Save, provide your user id to verify */
	function save(){
		
		if(!isset($this->user) || empty($this->user)) $this->user = userID();
		
		if(!isset($this->bitly) || empty($this->bitly)) $this->bitly = generateBitly(baseURL() . $this->url);

		
		if($this->user == userID()){
		
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
			return true;
		}else{
			return false;
		}
	}
	
	function getMainImage(){
		
		if(isset($this->images[0])){
			return $this->images[0];
		}else{
			return _DEFAULT_IMAGE;
		}
	}
	
}