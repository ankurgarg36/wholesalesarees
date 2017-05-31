<script type="text/javascript">
function refreshPage(val,id)
{
	if(val!='')
	{
		/* alert(id) */
		if(id=="material")
		var con=1;
		else if(id=="color")
		var con=2;
		else if(id=="price")
		var con=3;		
		window.location="index.php?page=wholesalesarees-saree&con="+con+"&value="+val;
	}
else if(val=='')
		window.location="index.php?page=wholesalesarees-saree";
	
}
</script>
<?php
			if($_REQUEST['con']==1)
			{
					$mat=$_REQUEST['value'];
					$col=0;
					$price="";
					$query="SELECT * FROM tbl_saree WHERE material='$_REQUEST[value]'";
					$material_info=mysql_fetch_array(mysql_query("SELECT * from tbl_material WHERE id='$_REQUEST[value]'"));
					$title="You Searched for ".$material_info['material_type'];
					$page_title=$material_info['material_type']." on WholeSaleSaree | online wedding Sarres";					
					
			}
			else if($_REQUEST['con']==2)
			{
					$mat=0;
					$col=$_REQUEST['value'];	
					$price="";							
					 $query="SELECT * FROM tbl_saree WHERE color='$_REQUEST[value]'";
					$color_info=mysql_fetch_array(mysql_query("SELECT * from tbl_color WHERE id='$_REQUEST[value]'"));
					$title=$color_info['color_name']." Color Sarees";					 
			}
			else if($_REQUEST['con']==3)
			{
					$mat=0;
					$col=0;	
					$price=$_REQUEST['value'];					
					$c=explode('-',$_REQUEST['value']);
					if($c[1]=="")
					{
						$query="SELECT * FROM tbl_saree WHERE price>=$c[0]";
						$title="Saris more than Rs. ".$c[0];
						$show_price="Above 3000";					 																			
					}	
					else if($c[0]==0)
					{
						$query="SELECT * FROM tbl_saree WHERE price<=$c[1]";
						$title="Saris less than Rs. ".$c[1];	
						$show_price="Less than 1000";					 																													 																			
					}					
					else
					{
						$query="SELECT * FROM tbl_saree WHERE price>=$c[0] and price<=$c[1]";
						$title="Saris in Rs. ".$c[0].' - Rs.'.$c[1];
						$show_price=$_REQUEST['value'];				 																													 																														 																									
					}	
			}
			else
			{
				$query="SELECT * FROM tbl_saree";
				$title="Sarees";
					$page_title="WholeSaleSaree- Sarees | online wedding Sarres";									
			}

?>
<div class="container_12">
    <div class="grid_9">
      <h3><?php echo $title; ?></h3>

      <div class="tours gallery" >
      
            <?php 
			 $q=mysql_query($query);
										
				$i=1;            
            $j=1; 
    if(mysql_num_rows($q)!=0)
    {
				while($info=mysql_fetch_array($q))
				{
					if($i % 2==0)
						$class="grid_4 omega";
					else 
						$class="grid_4 alpha";					
      ?>
<div class="<?php echo $class; ?>">
        <div class="tour">
        <a href="index.php?page=wholesalesarees-saree-detail&product_code=<?php echo $info['product_code'];?>" title="<?php echo $info['title'];?>" >
					<img src="resize.php?w=200&h=240&img=<?php echo $info['path_to_file'];?>"  alt="<?php echo $info['title']; ?>" class="img_inner fleft" title="<?php echo $info['title']; ?>" />
			</a>		          
          <div class="extra_wrapper">
            <p class="text1"><?php echo implode(' ', array_slice(explode(' ', $info['title']), 0, 3)).'...';?></p>
            <p class="price"><?php echo $info['purpose'];?></p>
            <p class="price">Best Price <span>Rs. <?php echo money_format('%!i', $info['price']);?></span></p>
            <a href="index.php?page=wholesalesarees-saree-detail&product_code=<?php echo $info['product_code'];?>" class="btn">Details</a>
          </div>
        </div>
      </div>
      <?php
		if($i % 2==0)
		{
			?>
	      <div class="clear"></div>      			
			<?php
		}      
      $i++;
      }
	}
	else /* There are no products in this collection. */
	{
	echo "<div class='no_product'>There are no products in this collection.</div>";
	}  
   ?>


      </div>
           <div class="pages"></div>
    </div>
    <div class="grid_3">
        <h3>Search Sarees</h3>
         <form method="post" id="form2" class="form1">
           <label >
            <span><span class="col1">All Search Operators</span><br>
            Material</span>
            <select name="material" id="material" onchange="refreshPage(this.value,this.id)">
              <option value="" selected="selected" >All</option>
			<?php
$cat_type=mysql_query("select * from  tbl_material where product_type='1'") or die(mysql_error());
while($val=mysql_fetch_array($cat_type))
{
	if($mat==$val['id'])
	$sel="Selected";
	else 
	$sel="";
	echo "<option value='$val[id]' $sel>$val[material_type]</option>";			
}
			?>
            </select>
          </label>
          <label >
            <span>Color</span>
            <select name="color" id="color" onchange="refreshPage(this.value,this.id)">
              <option value="" selected="selected" >All</option>
			<?php
$color=mysql_query("select * from  tbl_color where product_type='1'") or die(mysql_error());
while($val=mysql_fetch_array($color))
{
	if($col==$val['id'])
	$sel="Selected";
	else 
	$sel="";	
	echo "<option value='$val[id]' $sel >$val[color_name]</option>";			
}
			?>
            </select>
          </label>
          <label>
            <span>Price</span>
            <select id="price" name="price" onchange="refreshPage(this.value,this.id)">
					<?php if($price!='') echo "<option value='$price' selected>$show_price</option>";
							else echo "<option value='' selected>Any price</option>"			
					 ?>              
              <option value="0-1000">less than 1000</option>
              <option value="1000-1500">1000-1500</option>
              <option value="1500-2000">1500-2000</option>
              <option value="2000-3000">2000-3000</option>
              <option value="3000">Above 3000</option>           
            </select>
          </label>
          <div class="clear"></div>
        </form> 
    </div>
    <div class="clear"></div>
  </div>