<?php 
namespace classes;
class User 
{
	
	function __construct()
	{
		
	}
	function login($d){
		// return " test";
		var_dump($d);
	}
	function load(){
		return new self();
	}
}

 ?>