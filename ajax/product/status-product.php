<?php
	$data = json_decode(file_get_contents("php://input"));	
	include('../mysql_crud.php');
	$id = $data->id->id;
	$db = new Database();
	$db->connect();
	$db->update('products',array('status'=>$data->id->status),'id="'.$id.'"');
	$res = $db->getResult();
	echo json_encode($res);	
?>