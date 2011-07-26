<?php 
/**
 * PHPCodesnipp.it
 * BOOTSTRAP
 * 
 * PLEASE DO NOT TOUCH THIS FILE
 * 
 * @author Sebastian Roming
 */

require_once './src/inc/default/default.settings.inc.php5';
require_once './src/inc/settings.inc.php5';

$autoloader = new Autoloader();
spl_autoload_register( array($autoloader, 'load') );
?>