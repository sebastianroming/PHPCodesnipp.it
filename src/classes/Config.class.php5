<?php 
/**
 * PHPCodesnipp.it
 * 
 * PLEASE DO NOT TOUCH THIS FILE
 * 
 * @author Sebastian Roming
 */

class Config {
	
	protected static $_config = array();
	
	
	// --------------------------------------------------
	protected function __construct() { 
		
	}
	
	// --------------------------------------------------
	public static function get($configKey) {
		
		if (empty(self::$_config)) {
			self::$_config = &$GLOBALS['config'];
		}

		if (!is_array($configKey)) {

			$args = func_get_args();
			
			$configKey = (count($args) > 1) ? $args : array($configKey);

		}

		$config = self::$_config;
		
		foreach ($configKey as $key) {
			
			if (!array_key_exists($key, $config)) {
				return null;
			}
			
			$config = $config[$key];
			
		}

		return $config;
		
	}
	
}
?>