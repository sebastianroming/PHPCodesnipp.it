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
		
		if (in_array($requestMethod, $this->_availableRequestMethods)) {
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
		
		
	}	
	
}
?>