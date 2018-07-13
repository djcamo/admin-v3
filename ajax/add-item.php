<?php
	$data = json_decode(file_get_contents("php://input"));	
	include('mysql_crud.php');
	include('ChromePhp.php');
	ChromePhp::log($data);
    $date = date("Y-m-d");
    $table = $_GET["table"];
	$db = new Database();
    $db->connect();
    switch ($table) {
        case "products":
            $db->insert('products',array('name'=>$data->name,'description'=>$data->description, 'category'=>$data->category, 'image'=>$data->image, 'price'=>$data->price, 'status'=>'Active', 'created'=>$date, 'modified'=>$date));
            break;
        case "pages":
            $db->insert('pages',array('name'=>$data->name,'pageTitle'=>$data->pagetitle, 'pageDescription'=>$data->pagetescription, 'slug'=>$data->slug, 'content'=>$data->content, 'service'=>$data->service, 'created'=>$date, 'modified'=>$date));
            break;
        case "testimonials":
            $db->insert('testimonials',array('username'=>$data->username,'testimonial'=>$data->testimonial, 'position'=>$data->position, 'image'=>$data->image, 'status'=>'Active', 'created'=>$date, 'modified'=>$date));    
            break;
        case "sliders":
            $db->insert('sliders',array('alttext'=>$data->alttext, 'caption1'=>$data->caption1, 'caption2'=>$data->caption2, 'image'=>$data->image, 'status'=>'Active', 'created'=>$date, 'modified'=>$date));    
            break;
    }
	
	$res = $db->getResult();
	ChromePhp::log($res);
	echo json_encode($res);	
?>