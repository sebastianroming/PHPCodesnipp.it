<?php 
/**
 * PHPCodesnipp.it
 * 
 * PLEASE DO NOT TOUCH THIS FILE
 * 
 * @author Sebastian Roming
 */

class Config {
	
	protected static $_settings = false;
	
	
	// --------------------------------------------------
	protected function __construct() { 
		
	}
	
	// --------------------------------------------------
	public static function get($keyPath) {
		
		self::_init();

		if (!is_array($keyPath)) {

			$funcArguments = func_get_args();

			if (count($funcArguments) > 1) {

				$keyPath = $funcArguments;

			} else {

				$keyPath = array($keyPath);

			}

		}

		$settings = self::$_settings;

		foreach ($keyPath as $key) {

			if (array_key_exists($key, $settings)) {

				$settings = $settings[$key];

			} else {

				return null;

			}

		}

		return $settings;
		
	}
	
	// --------------------------------------------------
	protected static function _init() {

		if (self::$_settings === false) {
			self::$_settings = &$GLOBALS['config'];
		}

	}
	
}
?>