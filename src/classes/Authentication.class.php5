<?php 
/**
 * PHPCodesnipp.it
 * 
 * PLEASE DO NOT TOUCH THIS FILE
 * 
 * @author Sebastian Roming
 */

class Authentication {
	
	protected $_apiKey;
	
	// --------------------------------------------------
	public function __construct() {
		
	}
	
	// --------------------------------------------------
	public function setAPIKey($apiKey) {
		
		$this->_apiKey = $apiKey;
		
	}
	
	// --------------------------------------------------
	public function auth() {
		
		$curlRequest = new CurlRequest(Config::get('APIEndpoint'));
		$curlRequest->setRequestMethod('POST');
		$curlRequest->setUrlParam('auth');
		
		$authResult = $curlRequest->request();
		
	}
	
}
?>