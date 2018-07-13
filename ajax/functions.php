<?php
	include('mysql_crud.php');	
    
    function get_items(zz){
        $db = new Database();
	    $db->connect();
	    $db->select(zz,'*','',null, 'id');
	    $res = $db->getResult();
        echo json_encode($res);
        $db->disconnect();
    }
    
    function delete_item(zz){
        $data = json_decode(file_get_contents("php://input"));
        $id = $data->id->id;		
        $db = new Database();
        $db->connect();
        $db->delete(zz,'id="'.$id.'"'); 
        $res = $db->getResult();
        echo json_encode($res);	
        $db->disconnect();
    }
    
    function add_item(zz){
        $data = json_decode(file_get_contents("php://input"));	
        $date = date("Y-m-d");
        $db = new Database();
        $db->connect();
        $db->insert(zz,array('name'=>$data->name,'description'=>$data->description, 'category'=>$data->category, 'image'=>$data->image, 'price'=>$data->price, 'status'=>$data->active, 'created'=>$date, 'modified'=>$date));
        $res = $db->getResult();
        echo json_encode($res);	
        $db->disconnect();
    }

    function status_item(zz){
        $data = json_decode(file_get_contents("php://input"));	
        $id = $data->id->id;
        $db = new Database();
        $db->connect();
        $db->update(zz,array('status'=>$data->id->status),'id="'.$id.'"');
        $res = $db->getResult();
        echo json_encode($res);	
        $db->disconnect();
    }

?>