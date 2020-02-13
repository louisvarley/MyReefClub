<?php

namespace myReef\classes;

class imageUploader extends \myReef\classes\uploader{
	
    protected $options = array(
        'limit' => null,
        'maxSize' => 10080349,
        'extensions' => array('jpg','jpeg','png','gif'),
        'required' => false,
        'uploadDIR' => _UPLOADS_DIR,
		'uploadURL' => _UPLOADS_URL,
        'title' => array('auto', 10),
        'removeFiles' => true,
        'perms' => null,
        'replace' => true,
        'onCheck' => null,
        'onError' => null,
        'onSuccess' => null,
        'onUpload' => null,
        'onComplete' => null,
        'onRemove' => null
    );

	public function beforeUpload(){
		 
	  $this->imageResource = imagecreatefromstring($this->content);
		 
	  $this->height = imagesx($this->imageResource);
	  $this->width = imagesy($this->imageResource);
		  
	  $this->resize();
	}
	  
	public function resize(){
		
		
		$h = 1024;
		$w = 1280;
		
		$image = imagescale($this->imageResource, $w);
		ob_start(); //Turn on output buffering
		imagejpeg($image); //Generate your image

		$this->content = ob_get_contents(); // get the image as a string in a variable

		ob_end_clean(); //Turn off output buffering and clean it
		


		  
	}
	
}
?>