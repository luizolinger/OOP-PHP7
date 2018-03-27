<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

spl_autoload_register(function ($nameClass) {

	$dirClass = 'class';
	$filename = $dirClass . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $nameClass) . '.php';
//	$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . '.php';
	if (file_exists($filename)) {

		require_once($filename);

	}

});

?>