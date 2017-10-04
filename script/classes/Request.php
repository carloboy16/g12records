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
		
	}
	function login($d){
		$this->user->login($d);
	}
	function user_registration($d){

	}
}
 ?>