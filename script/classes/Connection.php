<?php 
namespace classes;
class Connection
{
	public $con;
	function __construct()
	{
		global $db;
		$this->con= new \mysqli($db["server"],$db["user"],$db["password"],$db["database"]);
	}
	function load(){
		return new self();
	}
}

 ?>