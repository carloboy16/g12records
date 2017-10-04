<?php 
namespace classes;
class Request 
{
	protected $con;
	protected $user;
	function __construct()
	{
		$this->con = \classes\Connection::load();
		$this->user = \classes\User::load();
		// var_dump($this->user->login());
	}
	function login($d){
		$this->user->login($d);
	}
	function user_registration($d){
		var_dump($d);
	}
}
 ?>