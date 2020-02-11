<?php

namespace myReef\classes;

class imageUploader extends \myReef\classes\uploader{
	
    protected $options = array(
        'limit' => null,
        'maxSize' => 3080349,
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
		  
	  $this->resize();
	}
	  
	public function resize(){
		  
		  
	}
	
}
?>