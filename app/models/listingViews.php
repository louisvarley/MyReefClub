<?php

namespace myReef\models;


class listingViews extends \myReef\models\model{
	
	public $views;
	public $guid;
	public $lastViewed;
	public $lastViewedIP;
	
	public function __construct($guid){
		
		if(!isset($guid)) return false;
		
		$this->guid = $guid;
					
		if(file_exists(_LISTING_VIEWS_DIR . $this->guid . '.json')){
			
			$json = file_get_contents(_LISTING_VIEWS_DIR . $this->guid . '.json');
			$data = (object) json_decode($json);
			$this->setViews($data->views);
			
		}else{
			
			$this->setViews(0);
			
		}
		
	}
	
	public function increment(){
		
		$this->views = $this->views + 1;	
		$this->lastViewed = time();
		$this->lastViewedIP = getClientIP();
		
		file_put_contents(_LISTING_VIEWS_DIR . $this->guid . '.json', json_encode($this), LOCK_EX);
		
	}
	
	public function getViews(){
		return $this->views;
	}

	public function setViews( $n ){
		return $this->views = $n;
	}
	
}