<?php
$product_code=$_REQUEST['product_code'];
$info=mysqli_fetch_array(mysqli_query($link,"SELECT * from tbl_lengha WHERE product_code='$product_code'"));
$material_info=mysqli_fetch_array(mysqli_query($link,"SELECT * from tbl_material WHERE id='$info[material]'"));
$color_info=mysqli_fetch_array(mysqli_query($link,"SELECT * from tbl_color WHERE id='$info[color]'"));
list($width, $height, $type, $attr) = getimagesize($info['path_to_file']);
/*echo "Image width " .$width;
echo "<BR>";
echo "Image height " .$height;
echo "<BR>";
echo "Image type " .$type;
echo "<BR>";
echo "Attribute " .$attr;*/
?>

<div class="container_12">
    <div class="grid_12">
      <h3><?php echo $info['title']; ?></h3>

      <div class="tours gallery" >
      


<div class="grid_12 alpha">

		
		
		<div class="zoom-section">
		<div class="zoom-small-image">
			<a href="resize.php?w=768&h=1024&img=<?php echo $info['path_to_file'];?>" class='cloud-zoom' rel="tint:'#ff0000',tintOpacity:0.5,smoothMove:5,zoomWidth:480,adjustY:-4,adjustX:10"><img src="resize.php?w=320&h=480&img=<?php echo $info['path_to_file'];?>" title="<?php echo $info['title'];?>" alt="<?php echo $info['title'];?>" /></a>
		</div>
		<div class="zoom-desc">

</div>
	</div><!--zoom-section end-->
	
        <div class="tour">
          <div class="extra_wrapper">
            <p class="text1"><?php echo $info['title']; ?></p>
            <p class="price">Product Code:<span><?php echo $info['product_code'];?></span></p>            
            <p class="price">Best Price:<span>Rs. <?php echo money_format('%!i', $info['price']);?></span></p>
            <p class="price">Material Type: <span><?php echo $material_info['material_type'];?></span></p>
            <p class="price">Color: <span><?php echo $color_info['color_name'];?></span></p>
            <p class="price">Purpose: <span><?php echo $info['purpose'];?></span></p>
            <p class="price">Description: <span><?php echo $info['description'];?></span></p>
          </div>
        </div>
      </div>

<div class="grid_12">


	<?php
$query=mysqli_query($link,"SELECT * FROM tbl_lengha WHERE material='$info[material]' and product_code!='$product_code' order by created_date LIMIT 10");
$i=1;
if(mysql_num_rows($query)!=0){
?>
	 <h3>May we also suggest</h3>
<?php 
while($res=mysqli_fetch_array($query))
{
?>
		<div class="product_box">
				<div class="thumb_wrapper">
					<a href="index.php?page=wholesalesarees-lengha-detail&product_code=<?php echo $res['product_code'];?>">
					<img src="resize.php?w=200&h=240&img=<?php echo $res['path_to_file'];?>" title="<?php echo $res['title'];?>" alt="<?php echo $res['title'];?>" />
					</a>
					<div class="price_inner_tag">Rs. <?php echo money_format('%!i', $res['price']);?></div>
					<p class="pro-info"><?php echo substr($res['title'],0,40);?> <a href="index.php?page=wholesalesarees-lengha-detail&product_code=<?php echo $res['product_code'];?>"  style="color:red;">Read More..</a></p>
										
					</div>
		</div> 
<?php
	if($i % 5==0 && $i<10)
	{
		?>
		<div class="clear cl1"></div>			
		<?php
	}
$i++;
}
}

  
?>	 

	 
</div>

      </div>
    </div>

	
	
    <div class="clear"></div>
  </div>