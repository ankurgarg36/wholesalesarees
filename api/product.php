<?php
		header("Access-Control-Allow-Origin: *");
		include('../admin/connection/connection.php');
		include('../function/functioncall.php');
		$category = $_REQUEST['category'];
		$code = $_REQUEST['code'];
		if(empty($category) || empty($code)){
		return null;	
		}
		$response = array();
		$table = sprintf("tbl_%s",$category);
		$q =sprintf("SELECT * FROM %s WHERE product_code=%s",$table,$code);

		$q_s=mysql_query($q);
		$q_saree=mysql_fetch_array($q_s);
		$result = array();
		$result['data']=[];
		if(!$q_saree){
			echo json_encode($result);	
			die;
		}
		$saree = [
				"id"=>$q_saree['id'],
				"categoryTitle"=>'Saree',
				"productCode"=>$q_saree['product_code'],
				"productTitle"=>$q_saree['title'],
				"color"=>$q_saree['color'],
				"material"=>$q_saree['material'],
				"price"=>$q_saree['price'],
				"purpose"=>$q_saree['purpose'],
				"detail"=>$q_saree['description'],
				"imagePath" =>sprintf("%s%s",HOST,$q_saree['path_to_file']),
				"url"=>sprintf('/product/%s/%s/%s',$category,getCleanUrl($q_saree['title']),$q_saree['product_code']),
				"quantity" => 1,

				];
	$response['pd'] = $saree;
		
		
	$response_saree = [];	
	$query_suggest = sprintf("SELECT * FROM %s WHERE material=%s AND product_code!=%s order by created_date LIMIT 10",$table,$q_saree['material'],$code);
	//$query_suggest = sprintf("SELECT * FROM %s WHERE  product_code!=%s order by created_date LIMIT 10",$table,$q_saree['material'],$code);
	$query=mysql_query($query_suggest);
	while($res=mysql_fetch_array($query))
	{
		$saree = [
				"id"=>$res['id'],
				"categoryTitle"=>'Saree',
				"productCode"=>$res['product_code'],
				"productTitle"=>$res['title'],
				"color"=>$res['color'],
				"material"=>$res['material'],
				"price"=>$res['price'],
				"purpose"=>$res['purpose'],
				"detail"=>$res['description'],
				"imagePath" =>sprintf("%s%s",HOST,$res['path_to_file']),
				"url"=>sprintf('/product/%s/%s/%s',$category,getCleanUrl($res['title']),$res['product_code'])
				];
				array_push($response_saree,$saree);		
	}
	
	$response['ps'] = $response_saree;
	
	
	$result['data']=$response;
	echo json_encode($result);				
				
				
   function getCleanUrl($str, $replace=array(), $delimiter='-'){
        if( !empty($replace) ) {
            $str = str_replace((array)$replace, ' ', $str);
        }
        $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
        $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
        $clean = strtolower(trim($clean, '-'));
        $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
        return $clean;
    }		
?>
