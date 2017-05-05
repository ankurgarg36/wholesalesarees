<?php
		error_reporting('off');
setlocale(LC_MONETARY, 'en_IN');		
		include('admin/connection/connection.php');
		include('function/functioncall.php');
		$fnc=new functioncall();
?>
<!DOCTYPE html>
<html lang="en">
		 <head>
		 <title><?php echo $page_title;?></title>
			<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
			<meta name="keywords" content="<?php echo $meta_keywords;?>" />		 		 
		   <meta name="description" content="<?php echo $meta_desc;?>">		   
		 <link rel="icon" href="images/favicon.ico">
		 <link rel="shortcut icon" href="images/favicon.ico" />
		 <link rel="stylesheet" href="css/style.css">
		 <link rel="stylesheet" href="css/slider.css">
     <link rel="stylesheet" href="css/form.css">
     		 <script src="js/jquery.js"></script>
     <script src="js/forms.js"></script>		 
		 <script src="js/jquery-migrate-1.1.1.js"></script>
		 <script src="js/superfish.js"></script>
		 <script src="js/sForm.js"></script>
		 <script src="js/jquery.jqtransform.js"></script>
		 <script src="js/jquery.equalheights.js"></script>
		 <script src="js/jquery.easing.1.3.js"></script>
		 <script src="js/tms-0.4.1.js"></script>
		<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
		 <script src="js/jquery.ui.totop.js"></script>
		 <script>
			$(window).load(function(){
			$('.slider')._TMS({
							show:0,
							pauseOnHover:false,
							prevBu:'.prev_slider',
							nextBu:'.next_slider',
							playBu:false,
							duration:800,
							preset:'random', 
							pagination:true,
							pagNums:false,
							slideshow:8000,
							numStatus:false,
							banners:true,
					waitBannerAnimation:false,
				progressBar:false
			})	;
			 $( "#tabs" ).tabs();
		 
		$().UItoTop({ easingType: 'easeOutQuart' });
		    $(".form1").jqTransform();
			});
			
			$(function() {
    /*$('#page-selection').pagination({
        items: 100,
        itemsOnPage: 10,
        cssStyle: 'light-theme'
    });*/
    

})


			
		 </script>


        <!-- Include Cloud Zoom CSS. -->
<link href="css/cloud-zoom.css" rel="stylesheet" type="text/css" />        

        <!-- Include Cloud Zoom script. -->
<script type="text/javascript" src="js/cloud-zoom.1.0.2.min.js"></script>
       	 
<style type="text/css">




.demo{margin:0 auto;width:600px;}
.tickul li{line-height:24px;}
/* zoom-section */
.zoom-section{clear:both;margin-top:20px;}
*html .zoom-section{display:inline;clear:both;}
.zoom-desc{float:left;margin-left:10px;width:310px;margin-bottom:20px;}
.zoom-small-image{border:4px solid #CCC;float:left;margin-bottom:20px;}
.zoom-tiny-image{border:1px solid #CCC;margin:0px;}
.zoom-tiny-image:hover{border:1px solid #C00;}
</style>		 



<script type="text/javascript" src="js/jquery.simplePagination.js"></script>


<link type="text/css" rel="stylesheet" href="css/simple.css">
<script type="text/javascript">
		$(function(){
			var perPage = 9;
			var opened = 1;
			var onClass = 'on';
			var paginationSelector = '.pages';
			$('.gallery').simplePagination(perPage, opened, onClass, paginationSelector);
		});
	</script>





		 
		 <!--[if lt IE 8] >
			 <div style=' clear: both; text-align:center; position: relative;'>
				 <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					 <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				 </a>
			</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">

		<![endif]-->
		 </head>
		 <body class="page1">
			 </head>
<!--==============================header=================================-->
 <header>
	<div class="container_12">
		<!--<div class="grid_12"> 
		<h1><a href="index.html"><img src="images/logo.png" alt="Gerald Harris attorney at law"></a> </h1>
					
				 
					 <div class="clear"></div>
			</div>-->
		<div style="margin:10px 0px 0px 0px;">
		<img src="images/logo.jpeg" alt="wholesalesarees logo" style="height:120px;"></div>
<div class="menu_block">
					 <nav	class="" >
						<ul class="sf-menu">
									 <li class="<?php echo $home_class; ?>"><a href="index.php" title="Home" >Home</a></li>
									 <li class="<?php echo $about_class; ?>"><a  href="?page=wholesalesarees-about" title="About Us" >About Us</a></li>
									 <li class="<?php echo $sarees_class; ?>"><a  href="?page=wholesalesarees-saree" title="Sarees">Sarees</a></li>
									 <li class="<?php echo $suit_class; ?>"><a  href="index.php?page=wholesalesarees-suit" title="Suit-Salvar">Suit-Salvar</a></li>
									 <li class="<?php echo $lengha_class; ?>"><a  href="index.php?page=wholesalesarees-lengha" title="Lengha-Chunni">Lengha-Chunni</a></li>
									 <li class="<?php echo $contact_class; ?>"><a  href="index.php?page=wholesalesarees-contact" title="Contacts Us">Contacts</a></li>
								 </ul>
							</nav>
					 <div class="clear"></div>
					 </div>
					 <div class="clear"></div>
					</div>
</header>
<div class="main">
<div class="content"><div class="ic"></div>
	   <?php
		if(isset($_REQUEST['page']))
		{
			$fnc->pageName($_REQUEST['page']);
		}
		else
		{
		?>
</div>
	<!-- Slider Starts -->	
	<div class="container_12">
		<div class="grid_12">
	 <div class="slider-relative">
			<div class="slider-block">
				<div class="slider">
					<a href="#" class="prev_slider"></a><a href="#" class="next_slider'"></a>
					<ul class="items">
						<li><img src="images/saree2.jpg" alt="">
								<div class="banner">
					<!--				<div>THERE ARE PLENTY OF PLACES</div><br>
									<span> that are worth seeing</span>-->
								</div>
						</li>
						<li><img src="images/saree2.jpg" alt=""></li>
						<li><img src="images/saree3.jpg" alt=""></li>
						<li><img src="images/saree4.jpg" alt=""></li>

					</ul>
				</div>
			</div>
		</div>
	</div></div>
		<!-- Slider Ends -->	
<!--=======content================================-->

<div class="content"><div class="ic"></div>
	<div class="container_12">
		<div class="grid_12">
			<h3>Top Arrivals</h3>
		</div>
		<div class="boxes">
		<div class="grid_4">
		<?php
		$q_saree=mysql_fetch_array(mysql_query("SELECT * FROM tbl_saree where id=(SELECT max(id) from tbl_saree)"));		
		?>
					<figure>
						<div>
						<img src="resize.php?w=350&amp;h=350&amp;img=<?php echo $q_saree['path_to_file']; ?>" alt="<?php echo $q_saree['title'];?>" title="<?php echo $q_saree['title'];?>"></div>
						<figcaption>
							<h3>Sarees</h3>
							<?php echo substr($q_saree['description'],0,200); ?>
							<a href="index.php?page=wholesalesarees-saree-detail&amp;product_code=<?php echo $q_saree['product_code'];?>" class="btn">Details</a>
						</figcaption>
					</figure>
				</div>
				<div class="grid_4">
		<?php
		$q_suit=mysql_fetch_array(mysql_query("SELECT * FROM tbl_suit where id=(SELECT max(id) from tbl_suit)"));		
		?>				
					<figure>
						<div>					
						<img src="resize.php?w=350&amp;h=350&amp;img=<?php echo $q_suit['path_to_file']; ?>" alt="<?php echo $q_suit['title'];?>" title="<?php echo $q_suit['title'];?>"></div>
						<figcaption>
							<h3>Suit</h3>
							<?php echo substr($q_suit['description'],0,200); ?>
							<a href="index.php?page=wholesalesarees-suit-detail&amp;product_code=<?php echo $q_suit['product_code'];?>" class="btn">Details</a>
						</figcaption>
					</figure>
				</div>
				<div class="grid_4">
		<?php
		$q_lengha=mysql_fetch_array(mysql_query("SELECT * FROM tbl_lengha where id=(SELECT max(id) from tbl_lengha)"));		
		?>				
					<figure>
						<div>					
						<img src="resize.php?w=350&amp;h=350&amp;img=<?php echo $q_lengha['path_to_file']; ?>" alt="<?php echo $q_lengha['title'];?>" title="<?php echo $q_lengha['title'];?>"></div>
						<figcaption>
							<h3>lengha-Chunni</h3>
							<?php echo substr($q_lengha['description'],0,200); ?>
							<a href="index.php?page=wholesalesarees-lengha-detail&amp;product_code=<?php echo $q_lengha['product_code'];?>" class="btn">Details</a>
						</figcaption>
					</figure>
				</div>
				<div class="clear"></div>
				</div>
				<div class="grid_12">
					 <div id="tabs">
	<ul>
		<li><a href="#tabs-1">Sarees</a></li>
		<li><a href="#tabs-2">Suit-Salvar</a></li>
		<li><a href="#tabs-3">Lengha-Chunni</a></li>
	</ul>
	<div class="clear"></div>
	
<!-- Saree Start -->

	<div class="tab_cont" id="tabs-1">
<?php
$q=mysql_query("SELECT * FROM tbl_saree ORDER BY RAND() LIMIT 10");
$i=1;
while($info=mysql_fetch_array($q))
{
?>
		<div class="product_box">
				<div class="thumb_wrapper">
					<a href="index.php?page=wholesalesarees-saree-detail&amp;product_code=<?php echo $info['product_code'];?>">
					<img src="resize.php?w=200&amp;h=240&amp;img=<?php echo $info['path_to_file'];?>" alt="<?php echo $info['title'];?>" title="<?php echo $info['title'];?>" />
					</a>
					<p class="pro-info"><?php echo substr($info['title'],0,35);?> <a href="index.php?page=wholesalesarees-saree-detail&amp;product_code=<?php echo $info['product_code'];?>" style="color:red;">Read More..</a></p>
					<div class="price_tag">Rs. <?php echo money_format('%!i', $info['price']);?></div>					
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
  
?>	
	</div>
<!-- Saree End -->
	
	
<!-- Suit Start -->	
	<div class="tab_cont" id="tabs-2">
<?php
$q=mysql_query("SELECT * FROM tbl_suit ORDER BY RAND() LIMIT 10");
$i=1;
while($info_suit=mysql_fetch_array($q))
{
?>
		<div class="product_box">
				<div class="thumb_wrapper">
					<a href="index.php?page=wholesalesarees-suit-detail&amp;product_code=<?php echo $info_suit['product_code'];?>">
					<img src="resize.php?w=200&amp;h=240&amp;img=<?php echo $info_suit['path_to_file'];?>" alt="<?php echo $info_suit['title'];?>" title="<?php echo $info_suit['title'];?>" />
					</a>
					<p class="pro-info"><?php echo substr($info_suit['title'],0,35);?> <a href="index.php?page=wholesalesarees-suit-detail&amp;product_code=<?php echo $info_suit['product_code'];?>" style="color:red;">Read More..</a></p>
					<div class="price_tag">Rs. <?php echo money_format('%!i', $info_suit['price']);?></div>					
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
  
?>	
	</div>
	<!-- Suit End -->



<!-- Suit Start -->	
	<div class="tab_cont" id="tabs-3">
<?php
$q=mysql_query("SELECT * FROM tbl_lengha ORDER BY RAND() LIMIT 10");
$i=1;
while($info_lengha=mysql_fetch_array($q))
{
?>
		<div class="product_box">
				<div class="thumb_wrapper">
					<a href="index.php?page=wholesalesarees-lengha-detail&amp;product_code=<?php echo $info_lengha['product_code'];?>">
					<img src="resize.php?w=200&amp;h=240&amp;img=<?php echo $info_lengha['path_to_file'];?>" alt="<?php echo $info_lengha['title'];?>" title="<?php echo $info_lengha['title'];?>" />
					</a>
					<p class="pro-info"><?php echo substr($info_lengha['title'],0,35);?> <a href="index.php?page=wholesalesarees-lengha-detail&amp;product_code=<?php echo $info_lengha['product_code'];?>" style="color:red;">Read More..</a></p>
					<div class="price_tag">Rs. <?php echo money_format('%!i', $info_lengha['price']);?></div>					
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
  
?>	
	</div>
	<!-- Suit End -->	

		
	</div>
</div>
		</div>
	<div class="clear"></div></div>		
		<?php
			}

		?>

</div>
		

<div class="bottom_block">
	<div class="container_12">
		<div class="grid_2 prefix_2">
			<ul>
				<li><a href="index.php" title="Home" >Home</a></li>
				<li><a  href="index.php?page=wholesalesarees-about" title="About Us" >About Us</a></li>
			</ul>
		</div>
		<div class="grid_2">
			<ul>
				<li><a  href="index.php?page=wholesalesarees-saree" title="Sarees">Sarees</a></li>
				<li><a  href="index.php?page=wholesalesarees-suit" title="Suit-Salvar">Suit-Salvar</a></li>
			</ul>
		</div>
		<div class="grid_2">
			<ul>
				<li><a  href="index.php?page=wholesalesarees-lengha" title="Lengha-Chunni">Lengha-Chunni</a></li>
				<li><a  href="index.php?page=wholesalesarees-contact" title="Contacts">Contacts</a></li>
			</ul>
		</div>
		<div class="grid_2">
			<h4>Contact Us:</h4>
			TEL: 1-800-234-5678<br><a href="#">info@demolink.org</a>
		 
		</div>
		<div class="clear"></div>
		</div>
	</div>
<!--==============================footer=================================-->

</div>
<footer>		
	<div class="container_12">
	<div class="grid_12">
		<div class="socials">
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
		</div>
			<div class="copy">
		 YourCompany &copy; 2014| <a href="#">Privacy Policy</a> | Website designed & developed  by <a href="http://www.ssoftware.in/" rel="nofollow" target="_blank">Sun Software Remedies </a>.
		 </div></div>
		 <div class="clear"></div>
	</div>

</footer>

</body>
</html>
