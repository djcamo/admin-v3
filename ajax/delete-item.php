<?php
	$data = json_decode(file_get_contents("php://input"));
	include('mysql_crud.php');
	include('ChromePhp.php');	
    $id = $data->id->id;		
    $table =  $_GET["table"];
	$db = new Database();
	$db->connect();
	$db->delete($table,'id="'.$id.'"'); 
	$res = $db->getResult();
	//ChromePhp::log($res);
	echo json_encode($res);	
?>