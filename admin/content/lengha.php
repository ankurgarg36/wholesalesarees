<?php
 $fnc=new FunctionCollection;
if($_REQUEST['prid']==1)
{
	 ?>
     <div class="bottom">
     <div class="right_panel">
        <div class="other_page_head">
           
        <div class="logo_info" id="image_head">
         <p id="item_image1">Lengha Management</p>
       <a onclick="history.back(); return false;" href="#">
                <div class="back_button"></div>
          </a>
          </div>
            <div class="other_head">
            </div>
           <span style="float:right;margin-right:140px;"> <a href="dashboard.php?page=len&prid=2" > Add Lehenga </a> </span>              
</div>
         <!-- table starts -->
      <div class="table_box">
    	    <!-- ADD link 
        <div class="add_stud">-->
        
<table cellpadding="2" cellspacing="2" border="0" class="display" id="example" width="100%" bgcolor="#2f8be8" >
	<thead>
   	<tr style="border:#737373 10px" color="black">
			<th>S.No</th>
         <th>Product Code</th>            
         	<th>Image</th>            
			<th>Title</th> 
			<th>Material</th>               
			<th>Price</th>  
			<th>Color</th>                  
			<th>Action</th>                     			                   			                 			                   
      </tr>
	</thead>
	<tbody>
	<?php
	 
	$data=mysql_query("SELECT * FROM tbl_lengha") or die(mysql_error());
	$i=1;
	while($info=mysql_fetch_array($data))
	{	
		$id=$info['id'];
		$material=mysql_fetch_array(mysql_query("SELECT * from tbl_material where id='$info[material]'"));
		$color=mysql_fetch_array(mysql_query("SELECT * from tbl_color where id='$info[color]'"));		
		$opr="dashboard.php?page=len&prid=4&x=".$id;
	  ?>
      <tr>
      <td valign="top" ><?php echo $i;?></td>
      <td valign="top"><?php echo $info['product_code'];?></td>
      <td valign="top">
<img src="resize.php?w=100&h=100&img=../../<?php echo $info['path_to_file']; ?>" title="<?php echo $info['title'];?>" alt='' />	  
	 </td>      
      <td valign="top" ><?php echo $info['title'];?></td>  
      <td valign="top" ><?php echo $material['material_type'];?></td>          
      <td valign="top" ><?php echo $info['price'];?></td>    
      <td valign="top" ><?php echo $color['color_name'];?></td>                    
      <td valign="top" >
		 <a href="dashboard.php?page=len&prid=2&x=<?php echo $id ?>" /> <img src="../images/edit.png" alt="Edit" title="Edit"> </a> |
		 <img src="../images/del.png" alt="Delete" title="Delete" onclick="del('<?php echo $opr; ?>')" style="cursor:pointer;">	       
      </td>             
      </tr>
<?php
$i++;
	}
?>
	</tbody>
	<tfoot>
		<tr>
			<th>S.No</th>
         <th>Product Code</th>            
         	<th>Image</th>                        
			<th>Title</th>  
			<th>Material</th>                           
			<th>Price</th>  
			<th>Color</th>                                
			<th>Action</th>                    			                   			               
        </tr>
	</tfoot>
</table>
</div>
</div>
</div>
     <?php	 	
 	}
/* Form of Add material */
if($_REQUEST['prid']==2)
{
 if(isset($_REQUEST['x']))
	{
		$id=$_REQUEST['x'];
 		$result = mysql_query("select * from tbl_lengha where id='$id'") or die(mysql_error());
		$info = mysql_fetch_array($result);  
		$button="Edit";
		$button_id="submit1";
		$label="Edit Lengha Information";
		$action="update";
	}
	else
	{
		$button="Submit";
		$label="Add Lengha";
		$action="add";
		$id="";
		$button_id="submit";
	}
 	
?>
<div class="bottom">
     <div class="right_panel">
     	
        <div class="other_page_head">
           
      <div class="logo_info" id="image_head">
     <p id="item_image1"><?php echo $label; ?></p>
     <a onclick="history.back(); return false;" href="#">
                <div class="back_button"></div>
                </a>
            </div>
            <div class="other_head">
            </div>
         </div>

      <form name="entry_form" id="entry_form" action="dashboard.php?page=len&prid=3"  method="post" enctype="multipart/form-data">
      
<table width="70%" border="0" align="center">
  <tr>
    <td height="30" colspan="4" class="strip1">LENGHA INFORMATION</td>
  </tr>
<tr>

<td width="70%;">
<table width="100%" border="1" align="center" style="border:0px;!important;">

  <tr>
    <td width="50" nowrap="nowrap"><label>Title</label></td>
    <td width="60"><input type="text" name="title" id="title" class="validate[required]" value="<?php echo $info['title'] ;?>"  required /></td>
  </tr>     
  <tr>
    <td width="50" nowrap="nowrap"><label>Material</label></td>
    <td width="60"><?php $fnc->getProductMaterial('material',$info['material'],3,'','235px'); ?></td>
  </tr>  
  <tr>
    <td width="50" nowrap="nowrap"><label>Price</label></td>
    <td width="60"><input type="text" name="price" id="price" class="validate[required]" value="<?php echo $info['price'] ;?>"  required /></td>
  </tr>   
  <tr>
    <td width="50" nowrap="nowrap"><label>Color</label></td>
    <td width="60"><?php $fnc->getProductColor('color',$info['color'],3,'','235px'); ?></td>
  </tr>   
  <tr>
    <td width="50" nowrap="nowrap"><label>Purpose</label></td>
    <td width="60"><input type="text" name="purpose" id="purpose" class="validate[required]" value="<?php echo $info['purpose'] ;?>"  required /></td>
  </tr> 
  <tr>
    <td width="50" valign="top" nowrap="nowrap"><label>Description</label></td>
    	<td width="60" >
		<textarea name="description" id="description" cols="30" class="validate[required]"><?php echo $info['description'];?></textarea>    
		</td>
  </tr>   
  <tr>
    <td width="50" nowrap="nowrap"><label>Meta Keyword</label></td>
    <td width="60"><input type="text" name="meta_keywords" id="meta_keywords" class="validate[required]" value="<?php echo $info['meta_keywords'] ;?>"  required /></td>
  </tr>  
  <tr>
    <td width="50" valign="top" nowrap="nowrap"><label>Meta Description</label></td>
    	<td width="60" >
		<textarea name="meta_description" id="meta_description" cols="30" class="validate[required]"><?php echo $info['meta_description'];?></textarea>    
		</td>
  </tr>    
  <tr>
    <td width="50" valign="top" nowrap="nowrap"><label>Image</label></td>
    	<td width="60" > <input type="file" id="image" name="image" onChange="readURL(this);" >
		</td>
  </tr>   
</table>

</td>

<td width="30%;">
<img src="<?php if($info['path_to_file']!='') echo '../../'.$info['path_to_file'];else echo '../../images/lahenga/len.jpg';?>" alt="" width="350" height="330" id="img_prev">
<input type="hidden" name="hidden_path_to_file" value="<?php echo $info['path_to_file']; ?>"  />
<input type="hidden" name="product_code" value="<?php echo $info['product_code']; ?>"  />

</td>


</tr>

    <tr>
    <td colspan="4" class="strip_rev" align="center">  
     <input type="hidden" name="operation" id="operation" value="<?php echo $action.':'.$id ?>">
    <input type="submit" value="<?php echo $button ?>" id="<?php echo $button_id ?>" align="middle" name="submit"  onclick="return done();" />
    </td>
  </tr>





</table>
</form>
     </div>
     </div>

<?php		
}
/* Saving Form data */
if($_REQUEST['prid']==3)
{
	$title					=		htmlspecialchars(mysql_escape_string($_POST['title']));
	$material				=		htmlspecialchars(mysql_escape_string($_POST['material']));
	$price					=		htmlspecialchars(mysql_escape_string(str_replace(',','',$_POST['price'])));
	$color					=		htmlspecialchars(mysql_escape_string($_POST['color']));
	$purpose				=		htmlspecialchars(mysql_escape_string($_POST['purpose']));	
	$description			=		htmlspecialchars(mysql_escape_string($_POST['description']));
	$meta_keywords			=		htmlspecialchars(mysql_escape_string($_POST['meta_keywords']));
	$meta_description		=		htmlspecialchars(mysql_escape_string($_POST['meta_description']));
	
	$created_date=date('Y-m-d h:i:s');
	$c_value=explode(':',$_POST['operation']);
	$action=$c_value[0];
	if($c_value[1]=="")
	{
				$query=mysql_query("SELECT max(product_code) FROM tbl_lengha")or die(mysql_error());
				$max_no=mysql_fetch_array($query);
				if($max_no[0]=="")
					 $product_code=120000001;
				else 
					$product_code=$max_no[0]+1;	
	}
	else 
					$product_code=$_POST['product_code'];	
	
$file_img = $_FILES['image']['name'];
if($file_img!="")
{
			$new_file_name=$product_code.'@';
			unlink('../../'.$_POST['hidden_path_to_file']);	
			$filepath= "../../uploads/lengha/".$new_file_name.basename( $_FILES['image']['name']);
			$path_to_file= "uploads/lengha/".$new_file_name.basename( $_FILES['image']['name']);
			if(move_uploaded_file($_FILES['image']['tmp_name'], $filepath)) 
			$msg="Successful Image"; 
}
else 	
$path_to_file=htmlspecialchars(mysql_escape_string($_POST['hidden_path_to_file']));	
	if($action=="add")
	{
 		$sql="INSERT INTO tbl_lengha (product_code,title,material,price,color,purpose,description,meta_keywords,
		meta_description,path_to_file,created_date) 
				VALUES('$product_code','$title','$material','$price','$color','$purpose','$description','$meta_keywords',
				'$meta_description','$path_to_file','$created_date')";
		$result=mysql_query($sql) or die(mysql_error());
		if($result==1)
		$msg="Lengha Added Successfully";
		else
		$msg="This Information already exists!";
	}	
	else if($action=="update")
	{
		$id=$c_value[1];
 		 $sql = "UPDATE  tbl_lengha SET title = '$title',material = '$material',price = '$price',color = '$color',
		 purpose = '$purpose',description = '$description',meta_keywords = '$meta_keywords',
		 meta_description = '$meta_description',path_to_file = '$path_to_file' WHERE id = '$id'" ;	
		$query= mysql_query($sql) or die(mysql_error());
		if($query==1)
		$msg="Information updated Successfully!";
		else
		$msg="OOPs....there is some problem!";
	}	
	?>
		<script>
		var msg="<?php echo $msg?>";
		alert(msg);
		window.location="dashboard.php?page=len&prid=1";
		</script>
<?php		
}
/* Delete the record */
if($_REQUEST['prid']==4)
{
		$id=$_REQUEST['x'];
 		 $sql = "DELETE from tbl_lengha WHERE id = '$id'" ;	
		$query= mysql_query($sql) or die(mysql_error());
		if($query==1)
		$msg="Record has been deleted form the Database";
		else
		$msg="OOPs....there is some problem!";		
	?>
		<script>
		var msg="<?php echo $msg?>";
		alert(msg);
		window.location="dashboard.php?page=len&prid=1";
		</script>
<?php			
}
?>