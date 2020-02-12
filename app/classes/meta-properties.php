<?php

namespace myReef\classes;

class metaProperties{

	public function __construct($meta = null){
		
		if($meta) addMeta($meta);
		
	}
	
	public function addMeta($meta){
		
		foreach($meta as $key => $t){
			$this->$key = $t;
		}
	}
	
	public function fetch(){
		
		return json_decode(json_encode($this),true);
		
	}
	
	
}