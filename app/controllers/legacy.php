<?php

namespace myReef\controllers;

class legacy extends \myReef\controllers\controller{
	
	public function init(){
		

		/* No Legacy Data Provided */
		if(!isset(parts()[2])) redirect("page-not-found");
		
		$data = parts()[2];
		
		$decode = base64_decode($data);
		
		$result = null;
		
		parse_str($decode,$result);
		

		$i = new \myReef\models\listing();
		$i->title = $result['title'];
		$i->type = $result['type'];		
		$i->name = $result['name'];		
		$i->description = $result['content'];
		$i->price = $result['price'];		
		$i->location = $result['location'];		
		$i->images = array($result['imageurl']);
		$i->created = time();

		$this->view->listing = $i;
		
		$this->view->meta->addMeta(array(
			'og:url' => currentURL(),
			'og:type' => 'article',			
			'og:title' => $this->view->listing->title,
			'og:description' => $this->view->listing->description,
			'og:image' => isset($this->view->listing->images[0]) ? baseURL() . $this->view->listing->images[0] : __DEFAULT_IMAGE,			
			
		));
		
	
	}	
	
}


?>