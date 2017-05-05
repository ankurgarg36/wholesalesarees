<?php
		header("Access-Control-Allow-Origin: *");
		include('../admin/connection/connection.php');
		include('../function/functioncall.php');
		$category = $_REQUEST['category'];
		$material = $_REQUEST['material'];
		$color = $_REQUEST['color'];
		$price = $_REQUEST['price'];
	
		if(empty($category)){
		return null;	
		}
		$response = array();
		$table = sprintf("tbl_%s",$category);
		if(!empty($material)){
			$q =sprintf("SELECT * FROM tbl_%s WHERE material=%s",$category,$material);	
			$material_info=mysql_fetch_array(mysql_query("SELECT * from tbl_material WHERE id='$material'"));
			$searchTitle=sprintf("You Searched for %s",$material_info['material_type']);
		}else if(!empty($color)){
			$q =sprintf("SELECT * FROM tbl_%s WHERE color=%s",$category,$color);
			$color_info=mysql_fetch_array(mysql_query("SELECT * from tbl_color WHERE id='$color'"));
			$searchTitle=sprintf("%s Color %s",$color_info['color_name'],$category);	
		}else if(!empty($price)){
			$searchTitle=sprintf("%s for selected price range",$category);	
			$c=explode('-',$price);
			if($c[1]==""){
				$q =sprintf("SELECT * FROM tbl_%s WHERE price>=%s",$category,$c[0]);
			}else if($c[0]==0){
				$q =sprintf("SELECT * FROM tbl_%s WHERE price<=%s",$category,$c[1]);
			}else{
				$q =sprintf("SELECT * FROM tbl_%s WHERE price>=%s and price<=%s",$category,$c[0],$c[1]);	
			}				
		}else{
			$q =sprintf("SELECT * FROM tbl_%s",$category);	
			$searchTitle=$category;	
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

	$finalResponse = ['searchTitle'=>$searchTitle,'products'=>$response];
	$result['data']=$finalResponse;	
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
