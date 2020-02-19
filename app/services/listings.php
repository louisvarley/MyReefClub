<?php

namespace myReef\services;

class listings extends \myReef\services\service{

	public static function getListings($filter = array()){
		
		$listings = [];
		
		/* Blank Result Set */
		$listingResults = new \myReef\models\listingResults();
		
		$files = glob(_LISTINGS_DIR . '*.json', GLOB_BRACE);
		foreach($files as $file) {
			$guid = explode(".",basename($file))[0];
			$i = new \myReef\models\listing();
			$i->load($guid);
			
			array_push($listings,$i);
		}
		
		/* If there is a filter, then filter the results */
		if(!empty($filter)){
			
	
			foreach($listings as $lKey => $lVal){
				
				foreach($filter as $fVal){
					$fvProp = $fVal['property'];
					$fvComparison = $fVal['comparison'];
					$fvValue = $fVal['value'];
					
					if(property_exists($lVal,$fvProp)){
						if($fvComparison == "eq" && $lVal->$fvProp != $fvValue) unset($listings[$lKey]);
						if($fvComparison == "neq" && $lVal->$fvProp == $fvValue) unset($listings[$lKey]);						
						if($fvComparison == "gt" && $lVal->$fvProp <= $fvValue) unset($listings[$lKey]);							
						if($fvComparison == "lt" && $lVal->$fvProp >= $fvValue) unset($listings[$lKey]);	
						if($fvComparison == "lte" && $lVal->$fvProp > $fvValue) unset($listings[$lKey]);							
						if($fvComparison == "gte" && $lVal->$fvProp < $fvValue) unset($listings[$lKey]);
						if($fvComparison == "nn" && !isset($lVal->$fvProp)) unset($listings[$lKey]);	
						if($fvComparison == "in" && isset($lVal->$fvProp)) unset($listings[$lKey]);							
					}
					
				}
			}
		}
		
		/* Arrange by when it was created */
		$created = array_column($listings, 'created');
		array_multisort($created, SORT_DESC, $listings);

		/* If a limit set a limit */
		if(!empty($filter['limit'])) $listings = array_slice($listings,0,$filter['limit']);		
				
		$listingResults->results = $listings;
		$listingResults->count = count($listings);
		$listingResults->empty = empty($listings);
		
		return $listingResults;
		
	}
	
	
	public static function getListing($guid){
		
		$i = new \myReef\models\listing();
		$i->load($guid);
		
		return $i;
	}

	public static function viewedListing($guid){
		
		$i = new \myReef\models\listingViews($guid);
		$i->increment();
		
		return $i->getViews();
			
		
	}
	
}