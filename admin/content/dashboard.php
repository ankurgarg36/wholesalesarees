<?php session_start();
 include ("../connection/connection.php");
 include ("../function/function.php");
error_reporting('off');
if(!isset($_SESSION['username']))
{
?>
    <script>
   window.location="../index.php";
    </script>
<?php
}
else
{
	$user_type=$_SESSION['user_type'];
	echo session_id();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bhawana Sarees Admin</title>

<link rel="shortcut icon" href="../assets/images/finance.jpg" type="image/x-icon"/>
<link rel="stylesheet" href="../assets/style/style_admin.css"/>
<link rel="stylesheet" href="../assets/style/style_table.css"/>
<link rel="stylesheet" href="../assets/style/style.min.css">
<script type="text/javascript" src="../assets/js/lib/jquery-1.9.1.min.js" > </script>
<!-- script to toggle left panel navigation -->
<script type="text/javascript">
$(document).ready(function(){
 	$("#hidden_tab1").hide();
	$("#hidden_tab2").hide();
	$("#hidden_tab3").hide();
	$("#hidden_tab4").hide();
	$("#hidden_tab5").hide();
	$("#hidden_tab6").hide();
	$("#hidden_tab7").hide();
	$("#hidden_tab8").hide();
	$("#hidden_tab9").hide();	
		
	
  $("#click").click(function(){
	  $("#hidden_tab1").toggle();
	  $("#hidden_tab2").toggle();
	  	$("#hidden_tab9").toggle();	

	   
  });
  $("#click1").click(function(){
	  $("#hidden_tab3").toggle();
	   $("#hidden_tab4").toggle();
  });
  $("#click2").click(function(){
	   $("#hidden_tab5").toggle();
	   $("#hidden_tab6").toggle();
	   $("#hidden_tab7").toggle();
	   $("#hidden_tab8").toggle();
	   
  });
});
  
</script>
<!-- CS and Js file for DayPicker-->
	<link rel="stylesheet" type="text/css" href="../css/daypicker/tcal.css" />
	<script type="text/javascript" src="../js/daypicker/tcal.js"></script> 
<!--Js and Css files of Data tables-->
 <!-- Jquery validation js and cs file -->
 	<link rel="stylesheet" href="../css/jquery_validation/validationEngine.jquery.css" type="text/css"/>
	<link rel="stylesheet" href="../css/jquery_validation/template.css" type="text/css"/>
	<script src="../js/jquery/jquery.min.js" type="text/javascript"></script>
	<script src="../js/jquery/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"> 
	</script> 
	<script src="../js/jquery/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script> 
    	<script src="../js/javascript/dashboard.js" type="text/javascript" charset="utf-8">
	</script>
   <script type="text/javascript" language="javascript" src="../assets/js/lib/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" src="../assets/js/pop up/jquery.bpopup-0.9.0.min.js"></script>
<script type="text/javascript" language="javascript" src="../assets/js/pop up/assets_scripting.min.js"></script>
<script type="text/javascript" language="javascript" src="../js/datatable/shCore.js"></script>    

<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').dataTable();
			} );
 </script>  
</head>
<body>

<!-- head  background starts -->
<div class="header">
	<div class="header_box">
    	<!-- head upper starts -->
        <div class="head_up">
        	
        		<center><strong style="font-weight:bolder;color:#FFF;font-family:'Lucida Console', Monaco, monospace; font-size:38px"><em>000000000</em></strong></center>
            
        
        	<div class="head_up_l">
            	<img src="../assets/images/finance.jpg" alt="logo" width="80" height="59"/>
            </div>
            
        	<div class="head_up_r">
            <?php echo "Date: ".date('M d, Y')." Time:".date('H:i:s'); ?>
            </div>
            
        </div>
      <!-- head upper ends -->
      
     <!-- head bottom starts --> 
    <div class="wrapper">
     <div class="nav">
     	<ul>
        <li><a href="dashboard.php">Home</a></li>
        	 <li><a href="dashboard.php?page=fees&prid=8&action_id=1" style="width:130px">Change Password</a></li>
 
            <li><a href="dashboard.php?page=fees&prid=10">Contact</a></li>
            <li><a href="logout.php" style="text-decoration:none;">Logout</a></li>
        </ul>
     </div>
    </div> 
     <!-- head bottom ends -->
     </div>
</div>
<!-- header ends -->
<!-- middle strip starts--->
<div class="strip">
	Welcome <font color="#990000" style="text-decoration:blink;"><?php echo strtoupper($_SESSION['username']);?></font>
</div>
<!-- middle strip ends--->
<!-- bottom starts-->
<div class="bottom">
     <!-- left panel starts-->
     <div class="left_panel">
     	<ul >
            <li><a href="dashboard.php?page=saree&prid=1">Manage Sarees</a></li>
			<!--<li><a href="dashboard.php?page=student_details&action_id=1">Allotment </a></li>-->
            <li ><a href="dashboard.php?page=len&prid=1&action_id=1">Manage Lenghas</a></li>
            <li><a href="dashboard.php?page=suit&prid=1&action_id=1">Manage Suits</a></li>
            <li><a href="dashboard.php?page=mat&prid=1">Material Management</a></li>  
            <li><a href="dashboard.php?page=col&prid=1">Color Management</a></li>                                  
            <!-- <li><a href="dashboard.php?page=fees&prid=3&action_id=1&operation=add">Loan Recieve</a></li>        
          <li id="click1"><a href="#">Attendance▼</a></li>
           <li class="hide_tab" id="hidden_tab3" style="width:170px; margin-left:30px;"><a href="dashboard.php?page=attandence_form&prid=1" style="text-decoration:none">▶Add Attendance</a></li>
                <li class="hide_tab" id="hidden_tab4" style="width:170px; margin-left:30px;"><a href="dashboard.php?page=attendance_details&prid=1&action_id=1" style="text-decoration:none">▶View Attendance</a></li>
           <li id="click"><a href="#">Loan Details▼</a></li>
           <li class="hide_tab" id="hidden_tab1" style="width:170px; margin-left:30px;"><a href="dashboard.php?page=fees&prid=2" style="text-decoration:none">▶Over All</a></li>
                <li class="hide_tab" id="hidden_tab2" style="width:170px; margin-left:30px;"><a href="dashboard.php?page=fees&prid=4&action_id=1" style="text-decoration:none">▶Monthly Recieving</a></li>
                <li class="hide_tab" id="hidden_tab9" style="width:170px; margin-left:30px;"><a href="dashboard.php?page=fees&prid=4&action_id=2" style="text-decoration:none">▶Monthly Issuing</a></li>                
             <li><a href="fee_management/report.php?prid=1&action_id=1" target="_blank">Report</a></li>
 <li><a href="../backup/d.php" >Back up</a></li>-->
 
                    
           </ul>
     </div>
     <!-- left panel ends-->
     <div class="right_panel">
     
     <!-- calling files from dashboard-->
         <?php
	  include('../function/functionCall.php');
    
		  $func = new FunctionCall();
		  if(isset($_REQUEST['page']))
		  {
			  $func -> PageName($_REQUEST['page']);
		  }
		  else
		  {
	 ?>



        <div id="manage_news_button" class="option_buttons">
        	 <div class="title">
            </div>
        </div>
     </div>
<?php
}
?>
</div>
</body>
</html>
