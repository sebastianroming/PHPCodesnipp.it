<?php 
/**
 * PHPCodesnipp.it
 * 
 * PLEASE DO NOT TOUCH THIS FILE
 * 
 * @author Sebastian Roming
 */

class CriticalException extends Exception {
	
	// --------------------------------------------------
	public function __construct($message) {

		parent::__construct($message, 0);

	}
	
	// --------------------------------------------------
	public function handle() {
		// handle the exception and notify user
	}
	
}
?>