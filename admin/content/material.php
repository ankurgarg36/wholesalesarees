<?php
 $fnc=new FunctionCollection;
if($_REQUEST['prid']==1)
{
	 ?>
     <div class="bottom">
     <div class="right_panel">
        <div class="other_page_head">
           
        <div class="logo_info" id="image_head">
         <p id="item_image1">Material Management</p>
       <a onclick="history.back(); return false;" href="#">
                <div class="back_button"></div>
          </a>
          </div>
            <div class="other_head">
            </div>
           <span style="float:right;margin-right:140px;"> <a href="dashboard.php?page=mat&prid=2" > Add Material  </a> </span>              
</div>
         <!-- table starts -->
      <div class="table_box">
    	    <!-- ADD link 
        <div class="add_stud">-->
        
<table cellpadding="2" cellspacing="2" border="0" class="display" id="example" width="100%" bgcolor="#2f8be8" >
	<thead>
   	<tr style="border:#737373 10px" color="black">
			<th>S.No</th>
         <th>Product Type</th>
			<th>Material</th>  
			<th>Operation</th>                     			                   
      </tr>
	</thead>
	<tbody>
	<?php
	 
	$data=mysqli_query($link,"SELECT * FROM tbl_material order by material_type") or die(mysql_error());
	$i=1;
	while($info=mysqli_fetch_array($data))
	{	
		$id=$info['id'];
		$opr="dashboard.php?page=mat&prid=4&x=".$id;
	  ?>
      <tr>
      <td ><?php echo $i;?></td>
      <td><?php echo $fnc->getProductName($info['product_type']);?></td>
      <td ><?php echo $info['material_type'];?></td>   
      <td >
		 <a href="dashboard.php?page=mat&prid=2&x=<?php echo $id ?>" /> <img src="../images/edit.png" alt="Edit" title="Edit"> </a> |
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
         <th>Product Type</th>
			<th>Material</th> 
			<th>Operation</th>                     			                   			               
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
 		$result = mysqli_query($link,"select * from tbl_material where id='$id'") or die(mysql_error());
		$info = mysqli_fetch_array($result);
		$button="Edit";
		$button_id="submit1";
		$label="Edit Material Information";
		$action="update";
	}
	else
	{
		$button="Submit";
		$label="Add Material";
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

      <form name="entry_form" id="entry_form" action="dashboard.php?page=mat&prid=3"  method="post" enctype="multipart/form-data">
      
<table width="70%" border="0" align="center">
  <tr>
    <td height="30" colspan="4" class="strip1">MATERIAL INFORMATION</td>
  </tr>
  <tr>
    <td width="20"><label>Product</label></td>
    <td width="20"><?php $fnc->getProduct('product_type',$info['product_type'],'required','235px'); ?></td>
  </tr>
  <tr>
    <td width="20"><label>Material Type</label></td>
    <td width="20"><input type="text" name="material_type" id="material_type" class="validate[required]" value="<?php echo $info['material_type'] ;?>"  required /></td>
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
	$product_type=$_POST['product_type'];
	$material_type= $_POST['material_type'];
	$created_date=date('Y-m-d h:i:s');
	$c_value=explode(':',$_POST['operation']);
	$action=$c_value[0];
	if($action=="add")
	{
 		$sql="INSERT INTO tbl_material (product_type,material_type,created_date) VALUES('$product_type','$material_type','$created_date')";
		$result=mysqli_query($link,$sql);
		if($result==1)
		$msg="Material Information Added Successfully";
		else
		$msg="This Information already exists!";
	}	
	else if($action=="update")
	{
		$id=$c_value[1];
 		 $sql = "UPDATE  tbl_material SET product_type = '$product_type', material_type = '$material_type' WHERE id = '$id'" ;	
		$query= mysqli_query($link,$sql) or die(mysql_error());
		if($query==1)
		$msg="Information updated Successfully!";
		else
		$msg="OOPs....there is some problem!";
	}	
	?>
		<script>
		var msg="<?php echo $msg?>";
		alert(msg);
		window.location="dashboard.php?page=mat&prid=1";
		</script>
<?php		
}
/* Delete the record */
if($_REQUEST['prid']==4)
{
		$id=$_REQUEST['x'];
 		 $sql = "DELETE from tbl_material WHERE id = '$id'" ;	
		$query= mysqli_query($link,$sql) or die(mysql_error());
		if($query==1)
		$msg="Record has been deleted form the Database";
		else
		$msg="OOPs....there is some problem!";		
	?>
		<script>
		var msg="<?php echo $msg?>";
		alert(msg);
		window.location="dashboard.php?page=mat&prid=1";
		</script>
<?php			
}
?>