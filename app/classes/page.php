<?php

namespace myReef\classes;

class page{
	
	public $hasView = false;
	public $hasController = false;
	
	function __construct(){
		
		/* The URL */
		$this->url = empty($_GET['url']) ? 'root' : $_GET['url'];
		
		/* The ROUTE */
		$this->route = dashesToCamelCase($this->url);

		/* Controller Class */
		$this->controllerClass = "myReef\\controllers\\$this->route";	
		
		
		
		/* View Class */
		$this->viewClass = "myReef\\views\\$this->route";	

		/* Has a Controller */
		if(class_exists($this->controllerClass)){
			$this->controller = new $this->controllerClass;
			$this->hasController = true;
		}
		
		/* Has a View */
		if(class_exists($this->viewClass)){			
			$this->controller->view = new $this->viewClass;
			$this->hasView = true;
		}

		if($this->hasController) $this->load();
		if($this->hasView) $this->render();
		
		if(!$this->hasView && !$this->hasController) redirect('page-not-found');
		
	}
	
	function load(){
		
		$this->controller->view->meta = new \myReef\classes\metaProperties();
		
		if(method_exists($this->controller,'login')) $this->controller->login();
		if(method_exists($this->controller,'nonce')) $this->controller->nonce();		
		if(method_exists($this->controller,'init')) $this->controller->init();
		if(method_exists($this->controller,'post') && !empty($_POST)) $this->controller->post();
		
		
	}
	
	function render(){
		
		if(method_exists($this->controller->view,'init')) $this->controller->view->init();			
		if(method_exists($this->controller->view,'beforeLoad')) $this->controller->view->beforeLoad();	
		if(method_exists($this->controller->view,'header')) $this->controller->view->header();	
		if(method_exists($this->controller->view,'content')) $this->controller->view->content();	
		if(method_exists($this->controller->view,'footer')) $this->controller->view->footer();			
		if(method_exists($this->controller->view,'afterLoad')) $this->controller->view->afterLoad();
	}
	
}