<?php 
namespace classes;
class Request 
{
	protected $con;
	protected $user;

	function __construct()
	{
		$this->user = \classes\User::load();
	}
	function login($d){
		$this->user->login($d);
	}
	function user_registration($d){	
		$this->user->registration($d);
	}
}
 ?>