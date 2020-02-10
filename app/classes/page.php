<?php

namespace myReef\classes;

class page{
	
	function __construct(){
		
		/* This Route */
		$this->url = empty($_GET['url']) ? 'root' : $_GET['url'];

		$this->route = dashesToCamelCase($this->url);
		
		$this->viewClass = "myReef\\views\\$this->route";
		$this->view = new $this->viewClass;
		
		$this->controllerClass = "myReef\\controllers\\$this->route";		
		$this->controller = new $this->controllerClass;
		
		$this->load();
	}
	
	function load(){
		
		if(method_exists($this->controller,'init')) $this->controller->init();
		if(method_exists($this->controller,'post') && !empty($_POST)) $this->controller->post();

		$this->render();
		
	}
	
	function render(){
		
		if(method_exists($this->view,'beforeLoad')) $this->view->beforeLoad();	
		if(method_exists($this->view,'header')) $this->view->header();	
		if(method_exists($this->view,'content')) $this->view->content();	
		if(method_exists($this->view,'footer')) $this->view->footer();			
		if(method_exists($this->view,'afterLoad')) $this->view->afterLoad();
	}
	
}