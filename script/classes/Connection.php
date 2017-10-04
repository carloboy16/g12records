<?php 
namespace classes;
class Connection
{
	protected $con;
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