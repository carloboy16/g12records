<?php 
function loadclass($classes)
{
	
	$path = __DIR__."/".$classes.".php";

	$path = str_replace("\\", "/", $path);
	// var_dump($path);
	if(file_exists($path)){
		require_once($path);
	}
}
spl_autoload_register('loadclass');

 ?>