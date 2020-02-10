<?php

namespace myReef\classes;

class page{
	
	function __construct(){
		
		/* This Route */
		$this->url = empty($_GET['url']) ? 'root' : $_GET['url'];
		$this->route = dashesToCamelCase($this->url);

		$this->controllerClass = "myReef\\controllers\\$this->route";		
		$this->controller = new $this->controllerClass;

		$this->viewClass = "myReef\\views\\$this->route";
		$this->controller->view = new $this->viewClass;
		
		$this->load();
	}
	
	function load(){
		
		if(method_exists($this->controller,'init')) $this->controller->init();
		if(method_exists($this->controller,'post') && !empty($_POST)) $this->controller->post();
		$this->render();
		
	}
	
	function render(){
		
		if(method_exists($this->controller->view,'beforeLoad')) $this->controller->view->beforeLoad();	
		if(method_exists($this->controller->view,'header')) $this->controller->view->header();	
		if(method_exists($this->controller->view,'content')) $this->controller->view->content();	
		if(method_exists($this->controller->view,'footer')) $this->controller->view->footer();			
		if(method_exists($this->controller->view,'afterLoad')) $this->controller->view->afterLoad();
	}
	
}