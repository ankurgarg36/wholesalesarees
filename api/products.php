<?php
		header("Access-Control-Allow-Origin: *");
		include('../admin/connection/connection.php');
		include('../function/functioncall.php');
		$category = $_REQUEST['category'];
		$limit = $_REQUEST['limit'];
		if(empty($category)){
		return null;	
		}
		$response = array();
		$table = sprintf("tbl_%s",$category);
		if(empty($limit)){
			$q ="SELECT * FROM ".$table."";	
		}else{
			$q ="SELECT * FROM ".$table." LIMIT 10";
		}
		
		$q_s=mysql_query($q);
		while($q_saree=mysql_fetch_array($q_s)){
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
				"imagePath" =>sprintf("%s/%s",$_SERVER['HTTP_HOST'],$q_saree['path_to_file']),
				"url"=>sprintf('/product/%s/%s/%s',$category,getCleanUrl($q_saree['title']),$q_saree['product_code'])
				];
				array_push($response,$saree);
			}

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
