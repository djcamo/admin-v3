<?php
	include('mysql_crud.php');
    include('ChromePhp.php');
    $table = $_GET["table"];
	$db = new Database();
	$db->connect();
	$db->select($table,'*','',null, 'id');
	$res = $db->getResult();
	//ChromePhp::log($res);
	echo json_encode($res);
?>