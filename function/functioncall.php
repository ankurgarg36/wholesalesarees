<?php

if($_REQUEST['page']=="wholesalesarees-saree")
{
		if($_REQUEST['con']==1)
		{
			$material_infot=mysql_fetch_array(mysql_query("SELECT * from tbl_material WHERE id='$_REQUEST[value]'"));	
			$page_title=$material_infot['material_type']." on wholesalesaree | online wedding Sarres";												
		}	
		else if($_REQUEST['con']==2)
		{						
			$color_info=mysql_fetch_array(mysql_query("SELECT * from tbl_color WHERE id='$_REQUEST[value]'"));
			$page_title=$color_info['color_name']." Color Sarees on wholesalesaree | online wedding Sarres | Sarees, Suits and Lengha";					 
		}
		else if($_REQUEST['con']==3)
		{					
					$c=explode('-',$_REQUEST['value']);
					if($c[1]=="")
						$page_title="Sarees more than Rs. ".$c[0]." on wholesalesaree | online wedding Sarres | Sarees, Suits and Lengha";
					else if($c[0]==0)
						$page_title="Sarees less than Rs. ".$c[1]." on wholesalesaree | online wedding Sarres | Sarees, Suits and Lengha";
					else
						$page_title="Sarees in Rs. ".$c[0].' - Rs.'.$c[1]." on wholesalesaree | online wedding Sarres | Sarees, Suits and Lengha";
		}			
		else
		$page_title="wholesalesarees - Sarees";
		$meta_desc="wholesalesarees, Latset Sarees, New Sarees, Latest Sarees Design";
		$meta_keywords="";
		$q_keywords=mysql_query("SELECT material_type from tbl_material WHERE product_type='1'");
		while($find_keyword=mysql_fetch_array($q_keywords))
		$meta_keywords=$meta_keywords.', '.$find_keyword['material_type'];			
		$sarees_class="current";
		$suit_class="";				
		$lengha_class="";	
		$home_class="";				
		$about_class="";
		$contact_class="";				
}
else if($_REQUEST['page']=="wholesalesarees-saree-detail")
{
$infot=mysql_fetch_array(mysql_query("SELECT * from tbl_saree WHERE product_code='$_REQUEST[product_code]'"));	
$page_title="wholesalesaree.in - ".$infot['title'];
$meta_desc=$infot['meta_description'];		
$meta_keywords=$infot['meta_keywords'];
		$sarees_class="current";
		$suit_class="";				
		$lengha_class="";	
		$home_class="";				
		$about_class="";
		$contact_class="";									
}
elseif($_REQUEST['page']=="wholesalesarees-suit")
{
		if($_REQUEST['con']==1)
		{
			$material_infot=mysql_fetch_array(mysql_query("SELECT * from tbl_material WHERE id='$_REQUEST[value]'"));	
			$page_title=$material_infot['material_type']." on wholesalesaree | online Salwar Suit";												
		}	
		else if($_REQUEST['con']==2)
		{						
			$color_info=mysql_fetch_array(mysql_query("SELECT * from tbl_color WHERE id='$_REQUEST[value]'"));
			$page_title=$color_info['color_name']." Color Salwar Suit on wholesalesaree | online wedding Sarres | Sarees, Suits and Lengha";					 
		}
		else if($_REQUEST['con']==3)
		{					
					$c=explode('-',$_REQUEST['value']);
					if($c[1]=="")
						$page_title="Salwar Suit more than Rs. ".$c[0]." on wholesalesaree | online wedding Sarres | Sarees, Suits and Lengha";
					else if($c[0]==0)
						$page_title="Salwar Suit less than Rs. ".$c[1]." on wholesalesaree | online wedding Sarres | Sarees, Suits and Lengha";
					else
						$page_title="Salwar Suit in Rs. ".$c[0].' - Rs.'.$c[1]." on wholesalesaree | online wedding Sarres | Sarees, Suits and Lengha";
		}			
		else
		$page_title="wholesalesaree.in - Salwar Suit";
		$meta_desc="wholesalesaree.in, Latset Sarees, New Sarees, Latest Sarees Design";	
		$meta_keywords="";
		$q_keywords=mysql_query("SELECT material_type from tbl_material WHERE product_type='2'");
		while($find_keyword=mysql_fetch_array($q_keywords))
		$meta_keywords=$meta_keywords.', '.$find_keyword['material_type'];				
		$sarees_class="";
		$suit_class="current";				
		$lengha_class="";	
		$home_class="";				
		$about_class="";
		$contact_class="";		
}
else if($_REQUEST['page']=="wholesalesarees-suit-detail")
{
$infot=mysql_fetch_array(mysql_query("SELECT * from tbl_suit WHERE product_code='$_REQUEST[product_code]'"));	
$page_title="wholesalesaree.in - ".$infot['title'];
$meta_desc=$infot['meta_description'];		
$meta_keywords=$infot['meta_keywords'];
		$sarees_class="";
		$suit_class="current";				
		$lengha_class="";	
		$home_class="";				
		$about_class="";
		$contact_class="";									
}
elseif($_REQUEST['page']=="wholesalesarees-lengha")
{
		if($_REQUEST['con']==1)
		{
			$material_infot=mysql_fetch_array(mysql_query("SELECT * from tbl_material WHERE id='$_REQUEST[value]'"));	
			$page_title=$material_infot['material_type']." on wholesalesarees | online Salwar Suit";												
		}	
		else if($_REQUEST['con']==2)
		{						
			$color_info=mysql_fetch_array(mysql_query("SELECT * from tbl_color WHERE id='$_REQUEST[value]'"));
			$page_title=$color_info['color_name']." Color Lengha-Chunni on wholesalesarees | online wedding Sarres | Sarees, Suits and Lengha";					 
		}
		else if($_REQUEST['con']==3)
		{					
					$c=explode('-',$_REQUEST['value']);
					if($c[1]=="")
						$page_title="Lengha-Chunni more than Rs. ".$c[0]." on wholesalesarees | online wedding Sarres | Sarees, Suits and Lengha";
					else if($c[0]==0)
						$page_title="Lengha-Chunni less than Rs. ".$c[1]." on wholesalesarees | online wedding Sarres | Sarees, Suits and Lengha";
					else
						$page_title="Lengha-Chunni in Rs. ".$c[0].' - Rs.'.$c[1]." on wholesalesarees | online wedding Sarres | Sarees, Suits and Lengha";
		}			
		else		
		$page_title="wholesalesarees - Lengha-Chunni";
		$meta_desc="wholesalesarees - Bridal Lengha,New Design Lengha";
		$meta_keywords="";
		$q_keywords=mysql_query("SELECT material_type from tbl_material WHERE product_type='3'");
		while($find_keyword=mysql_fetch_array($q_keywords))
		$meta_keywords=$meta_keywords.', '.$find_keyword['material_type'];		
		$sarees_class="";
		$suit_class="";				
		$lengha_class="current";	
		$home_class="";				
		$about_class="";
		$contact_class="";		
}
else if($_REQUEST['page']=="wholesalesarees-lengha-detail")
{
$infot=mysql_fetch_array(mysql_query("SELECT * from tbl_lengha WHERE product_code='$_REQUEST[product_code]'"));	
$page_title="wholesalesarees.in - ".$infot['title'];
$meta_desc=$infot['meta_description'];		
$meta_keywords=$infot['meta_keywords'];
		$sarees_class="";
		$suit_class="";				
		$lengha_class="current";	
		$home_class="";				
		$about_class="";
		$contact_class="";									
}
elseif($_REQUEST['page']=="wholesalesarees-contact")
{
		$page_title="wholesalesarees.in - contact";
		$meta_desc="wholesalesarees.in contact, Mail to wholesalesarees";
		$meta_keywords="Contact to wholesalesarees , mail to wholesalesarees, Query to wholesalesarees";	
		$sarees_class="";
		$suit_class="";				
		$lengha_class="";	
		$home_class="";				
		$about_class="";
		$contact_class="current";		
}
elseif($_REQUEST['page']=="wholesalesarees-about")
{
		$page_title="wholesalesarees.in - About Us";
		$meta_desc="wholesalesarees.in - Bhawna Sarres Profile";
		$meta_keywords="Profile of wholesalesarees , what is wholesalesarees";			
		$sarees_class="";
		$suit_class="";				
		$lengha_class="";	
		$home_class="";				
		$about_class="current";
		$contact_class="";		
}
else
{
		$page_title="wholesalesarees.in | Sarees, Suits and Lengha";
		$meta_desc="Latest Sarees, Suits and Lengha";
		$sarees_class="";
		$suit_class="";				
		$lengha_class="";	
		$home_class="current";				
		$about_class="";
		$contact_class="";			
}
class functioncall
{
function pageName($pageid){	
if($pageid=="wholesalesarees-saree")
{
		include('content/wholesalesarees-saree.php');	
}
if($pageid=="wholesalesarees-suit")
{
		require('content/wholesalesarees-suit.php');	
}
else if($pageid=="wholesalesarees-lengha")
{
		require('content/wholesalesarees-lengha.php');	
}
else if($pageid=="wholesalesarees-contact")
{
		require('content/wholesalesarees-contact.php');	
}
if($pageid=="wholesalesarees-saree-detail")
{
		include('content/wholesalesarees-saree-detail.php');	
}
if($pageid=="wholesalesarees-suit-detail")
{
		include('content/wholesalesarees-suit-detail.php');	
}
if($pageid=="wholesalesarees-lengha-detail")
{
		include('content/wholesalesarees-lengha-detail.php');	
}
if($pageid=="wholesalesarees-about")
{
		include('content/wholesalesarees-about.php');	
}
}
}

?>