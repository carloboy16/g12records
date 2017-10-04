<?php 
include "script/config.php";
if($_POST){
$req = new \classes\Request();
extract($_POST);
$req->$action($_POST);	
}

 ?>