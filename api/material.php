<?php
		header("Access-Control-Allow-Origin: *");
		include('../admin/connection/connection.php');
		include('../function/functioncall.php');
		$type = $_REQUEST['product_type'];
		if(empty($type) || empty($type)){
		return null;	
		}
		$response = array();
		$q =sprintf("SELECT * FROM tbl_material WHERE product_type=%s",$type);
		$q_material=mysqli_query($link,$q);
		while($res_material=mysqli_fetch_array($q_material)){
			$material = [
				"id"=>$res_material['id'],
				"materialType"=>$res_material['material_type'],
				];
				array_push($response,$material);
		}	
	$result = array();	
	$result['data']=$response;	
	echo json_encode($result);
?>
