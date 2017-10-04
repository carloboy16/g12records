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
	function check_username($d){
	   extract($d);
	   sleep(2);
	   $q='SELECT username FROM members where username=?';
	   $s = $this->con->prepare($q);
	   $s->bind_param('s',$username);
	   $s->execute();
	   $res = $s->get_result();
	   /*while ($r = $res->fetch_assoc()) {
	   var_dump($r);
	   }*/
	   $data = array();
	   if($res->num_rows=='1'){
	   	$data['result'] = "not avaiable";
	   	$data['message'] = "username not available";
	   }else{
	   	$data['result'] = "avaiable";
	   	$data['message'] = "username available";
	   }

	  header("Content-type:application/json");
	  echo json_encode($data);
	}
	function load(){
		return new self();
	}
}

 ?>