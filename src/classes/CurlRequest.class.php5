<?php 
/**
 * PHPCodesnipp.it
 * 
 * PLEASE DO NOT TOUCH THIS FILE
 * 
 * @author Sebastian Roming
 */

class CurlRequest {
	
	protected $_url;
	protected $_requestMethod;
	protected $_urlParams;
	
	private $_availableRequestMethods = array('GET', 'POST');
	
	// --------------------------------------------------
	public function __construct($url) {
		
		$this->_url = $url;
		
	}
	
	// --------------------------------------------------
	public function setRequestMethod($requestMethod='POST') {
		
		if (!in_array($requestMethod, $this->_availableRequestMethods)) {
			throw new CriticalException('Request method not allowed.');
		}
		
		$this->_requestMethod = $requestMethod;
		
	}
	
	// --------------------------------------------------
	public function setUrlParam($urlParam) {

		$this->_urlParams[] = $urlParam;
		
	}	
	
	// --------------------------------------------------
	public function request() {

		$url = $this->_url;
		
		if (!empty($this->_urlParams)) {
			foreach ($this->_urlParams as $urlParam) {
				$url .= '/' . $urlParam;
			}
		}
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERAGENT, 'PHPCodesnipp.it/' . Config::get('PHPCodesnippitVersion'));
		
		/** 
		 * post
		 */
		//curl_setopt($ch, CURLOPT_POST, 1); 
		//curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
		
		$result = curl_exec($ch);
		curl_close($ch);
		
		
	}	
	
}
?>