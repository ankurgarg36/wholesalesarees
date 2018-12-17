<?php
		header("Access-Control-Allow-Origin: *");
		include('../admin/connection/connection.php');
		include('../function/functioncall.php');
		$type = $_REQUEST['product_type'];
		if(empty($type) || empty($type)){
		return null;	
		}
		$response = array();
		$q =sprintf("SELECT * FROM tbl_color WHERE product_type=%s",$type);
		$q_color=mysqli_query($link,$q);
		while($res_color=mysqli_fetch_array($q_color)){
			$color = [
				"id"=>$res_color['id'],
				"color"=>$res_color['color_name'],
				];
				array_push($response,$color);
		}	
	$result = array();	
	$result['data']=$response;	
	echo json_encode($result);						
?>
