<?php

namespace myReef\services;

class listings extends \myReef\services\service{

	public static function getListings($filter = array()){
		
		$listings = [];
		
		$files = glob(_LISTINGS_DIR . '*.json', GLOB_BRACE);
		foreach($files as $file) {
			$guid = explode(".",basename($file))[0];
			$i = new \myReef\models\listing();
			$i->load($guid);
			
			array_push($listings,$i);
		}
		
		if(!empty($filter['limit'])) $listings = array_slice($listings,0,$filter['limit']);
		
		$created = array_column($listings, 'created');
		array_multisort($created, SORT_DESC, $listings);
		
		return $listings;
		
	}

}