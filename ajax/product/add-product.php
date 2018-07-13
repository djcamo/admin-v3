<?php
	$data = json_decode(file_get_contents("php://input"));	
	include('../mysql_crud.php');
	include('../ChromePhp.php');
	ChromePhp::log($data);
	$date = date("Y-m-d");
	$db = new Database();
	$db->connect();
	$db->insert('products',array('name'=>$data->name,'description'=>$data->description, 'category'=>$data->category, 'image'=>$data->image, 'price'=>$data->price, 'status'=>$data->active, 'created'=>$date, 'modified'=>$date));
	$res = $db->getResult();
	//ChromePhp::log($res);
	echo json_encode($res);	
?>