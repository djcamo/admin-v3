<?php
	$data = json_decode(file_get_contents("php://input"));	
	include('mysql_crud.php');
    $id = $data->id->id;
    $table = $_GET["table"];
	$db = new Database();
	$db->connect();
	$db->update($table,array('status'=>$data->id->status),'id="'.$id.'"');
	$res = $db->getResult();
	echo json_encode($res);	
?>