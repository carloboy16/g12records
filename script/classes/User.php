<?php 
namespace classes;
class User 
{
	protected $con;
	function __construct()
	{
		$this->con = \classes\Connection::load()->con;
	}
	function login($d){
		// return " test";
		// var_dump($d);
	}
	function registration($d){
		extract($d);
		$q="INSERT INTO 
		members(firstname,middlename,lastname,username,password,leadership)
		VALUES(?,?,?,?,?,?)";
		$st=$this->con->prepare($q);
		

		$stat=array();
		$password = md5($password);
		$st->bind_param('ssssss',$firstname,$middlename,$lastname,$username,$password,$leadership);
		sleep(2);
					if($st->execute()){
						$stat['result'] = "success";
						$stat['username'] = $username;
					}else{
						$stat['result'] = "failed";
					}


		header("Content-type:application/json");
		echo json_encode($stat);
	}
	function load(){
		return new self();
	}
}

 ?>