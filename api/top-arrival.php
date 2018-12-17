<?php
		header("Access-Control-Allow-Origin: *");
		include('../admin/connection/connection.php');
		include('../function/functioncall.php');
		$q_saree=mysqli_fetch_array(mysqli_query($link,"SELECT * FROM tbl_saree where id=(SELECT max(id) from tbl_saree)"));
		$saree = [
				"id"=>$q_saree['id'],
				"categoryTitle"=>'saree',
				"productTitle"=>$q_saree['title'],
				"detail"=>$q_saree['description'],
				"imagePath" =>sprintf("%s/%s",HOST,$q_saree['path_to_file']),
				"url"=>sprintf('/product/saree/%s/%s',getCleanUrl($q_saree['title']),$q_saree['product_code'])
				];
		$q_suit=mysqli_fetch_array(mysqli_query($link,"SELECT * FROM tbl_suit where id=(SELECT max(id) from tbl_suit)"));						
		$suit = [
				"id"=>$q_suit['id'],
				"categoryTitle"=>'Suit Salwar',
				"productTitle"=>$q_suit['title'],
				"detail"=>$q_suit['description'],
				"imagePath" =>sprintf("%s/%s",HOST,$q_suit['path_to_file']),
				"url"=>sprintf('/product/suit/%s/%s',getCleanUrl($q_suit['title']),$q_suit['product_code'])
				];		
		$q_lengha=mysqli_fetch_array(mysqli_query($link,"SELECT * FROM tbl_lengha where id=(SELECT max(id) from tbl_lengha)"));		
		$lengha = [
				"id"=>$q_lengha['id'],
				"categoryTitle"=>'lengha',
				"productTitle"=>$q_lengha['title'],
				"detail"=>$q_lengha['description'],
				"imagePath" =>sprintf("%s/%s",HOST,$q_lengha['path_to_file']),
				"url"=>sprintf('/product/lengha/%s/%s',getCleanUrl($q_lengha['title']),$q_lengha['product_code'])
				];		
	$response = array();
	array_push($response,$saree);
	array_push($response,$suit);
	array_push($response,$lengha);
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
