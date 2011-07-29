<?php 
class NoMethodException extends CriticalException {
	
	// --------------------------------------------------
	public function __construct($message, $method) {
		
		parent::__construct($message, 0);
		
	}
	
}
?>