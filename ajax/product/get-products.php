<?php
	include('../mysql_crud.php');
	include('../ChromePhp.php');
	$db = new Database();
	$db->connect();
	$db->select('products','*','',null, 'id');
	$res = $db->getResult();
	//ChromePhp::log($res);
	echo json_encode($res);
?>