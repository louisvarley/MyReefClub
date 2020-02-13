<?php

namespace myReef\classes;

class uploader extends \myReef\classes\ajax{
	
    protected $options = array(
        'limit' => null,
        'maxSize' => 0,
        'extensions' => array(),
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

    public $errorMessages = array(
        100 => "The uploaded file exceeds the upload_max_filesize directive in php.ini.",
        101 => "The uploaded file exceeds the maximum upload size.",
        103 => "The uploaded file was only partially uploaded.",
        105 => "No file was uploaded.",
        106 => "Missing a temporary folder.",
        107 => "Failed to write file to disk.",
        108 => "A PHP extension stopped the file upload.",
        109 => "Filetype not allowed",
        110 => "File uploading option in disabled in php.ini",
        111 => "The uploaded file exceeds the post_max_size directive in php.ini",
        112 => "File is too big",
        113 => "Maximum number of files exceeded",
        114 => "No file was choosed. Please select one.",
        115 => "File could't be download."
    );

    private $field = null;
    private $data = array(
        "hasErrors" => false,
        "hasWarnings" => false,
        "isSuccess" => false,
        "isComplete" => false,
        "data" => array(
            "files" => array(),
            "metas" => array()
        )
    );
	
	public function beforeUpload(){}
	public function afterUpload(){}	

	/* Called when AJAX is called */
    public function init(){
	
		/* Add these errors into the response */
		$this->response->addErrors($this->errorMessages);
	
		/* Begin Upload */
		$this->upload('files');
 
    }
	
	/* Upload the file */
    public function upload($field){
		
        $this->initialize($field);
		
		$this->content = file_get_contents($this->file);
		
		$this->beforeUpload();
		
		if (file_put_contents($this->fileDestination, $this->content)) {
			$this->response->setCode(0);
			$this->response->url = $this->fileURL;
			$this->response->fileSize = $this->fileSize;
			$this->response->GUID = $this->GUID;
			$this->response->fileExtension = $this->fileExtension;
			$this->response->send();
		}else{
			$this->response->setCode(107);
		}
		
		$this->afterUpload();
		

    }

	/* Gather the Required details about the file */
    private function initialize($field){
		
		if(empty($_FILES[$field]['tmp_name'][0])) $this->response->setCode(105);
		if(empty($_FILES[$field]['name'][0])) $this->response->setCode(105);
		
		if (!file_exists($this->options['uploadDIR']))  mkdir($this->options['uploadDIR'], 0777, true);

		$this->file = ($_FILES[$field]['tmp_name'][0]);
		$this->fileSize = filesize($this->file);
		$this->fileExtension = pathinfo($_FILES[$field]['name'][0], PATHINFO_EXTENSION);
		$this->GUID = GUID();
		$this->fileNewFileName = $this->GUID  . '.' . $this->fileExtension;
		$this->fileURL = $this->options['uploadURL'] . $this->fileNewFileName;
		$this->fileDestination = $this->options['uploadDIR'] . $this->fileNewFileName;	
		
		$this->validate();
    }

	/* Validate the file matches the given settings */
    private function validate(){
	
        if($this->options['maxSize'] < $this->fileSize) $this->response->setCode(101);		

	}
	
	
}
?>