<?php
	$data = json_decode(file_get_contents("php://input"));
	include('../mysql_crud.php');
	include('../ChromePhp.php');	
	$id = $data->id->id;		
	$db = new Database();
	$db->connect();
	$db->delete('products','id="'.$id.'"'); 
	$res = $db->getResult();
	//ChromePhp::log($res);
	echo json_encode($res);	
?>