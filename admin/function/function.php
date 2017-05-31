<?php



class FunctionCollection{


function getProductMaterial($name,$value,$condition,$required,$width)
{

	echo"<select name='$name' id='$name'  $required style='width:$width'>";
$cat_type=mysql_query("select * from  tbl_material where product_type='$condition'") or die(mysql_error());

if($value=="")
echo "<option value='' selected>Select Material </option>";
while($val=mysql_fetch_array($cat_type))
{
	if($value==$val['id'])
	$sel="Selected";
	else 
	$sel="";
	echo "<option value='$val[id]' $sel>$val[material_type]</option>";	
}

echo"</select>";

}


function getProductColor($name,$value,$condition,$required,$width)
{
	echo"<select name='$name' id='$name'  $required style='width:$width'>";
$cat_type=mysql_query("select * from  tbl_color where product_type='$condition'") or die(mysql_error());

if($value=="")
echo "<option value='' selected>Select Color</option>";
while($val=mysql_fetch_array($cat_type))
{
	if($value==$val['id'])
	$sel="Selected";
	else 
	$sel="";
	echo "<option value='$val[id]' $sel>$val[color_name]</option>";	
}

echo"</select>";

}


function getProduct($name,$value,$required,$width)
{

	echo"<select name='$name' id='$name'  $required style='width:$width'>";
	if($value!="")	
	{
		if($value==1) $s="Saree";else if($value==2) $s="Salwar Suit";else if($value==3) $s="Lehenga Chunni";		
		echo "<option value='$value' selected>$s</option>";
	}
	else
	echo "<option value='' selected>Select Product</option>";
	echo "<option value='1'>Saree</option>";
	echo "<option value='2'>Salwar Suit</option>";
	echo "<option value='3'>Lehenga Chunni</option>";	
	echo"</select>";

}

function getProductName($value)
{
if($value==1) $s="Saree";else if($value==2) $s="Salwar Suit";else if($value==3) $s="Lehenga Chunni";
return $s;	
}

function getColor($name,$value,$required,$width)
{
	echo"<select name='$name' id='$name'  $required style='width:$width'>";
	if($value!="")	
	{
		echo "<option value='$value' selected>$value</option>";
	}
	else
	echo "<option value='' selected>Select Color</option>";
	echo "<option value='1'>Pink</option>";
	echo "<option value='2'>Blue</option>";
	echo "<option value='3'>Red</option>";	
	echo "<option value='4'>White</option>";
	echo "<option value='5'>Black</option>";
	echo "<option value='6'>Yellow</option>";	
	echo "<option value='7'>Cream</option>";
	echo "<option value='8'>Green</option>";
	echo "<option value='9'>Purple</option>";	
	echo "<option value='10'>Magenta</option>";
	echo "<option value='11'>Brown</option>";
	echo "<option value='12'>Mehroon</option>";		
	echo "<option value='13'>Mehandi</option>";
	echo "<option value='14'>Multi</option>";	
	echo "<option value='15'>Mustard</option>";
	echo "<option value='16'>Gajjaria</option>";
	echo "<option value='17'>Golden</option>";		
	echo "<option value='16'>Wine</option>";
	echo "<option value='17'>Orange</option>";		
	echo"</select>";
}




function getDay($name,$value)

	{

			echo "<select name='$name'   id='$name' class='validate[required]'>";

		if($value!="")

		{

		echo "<option value='$value' selected>$value</option>";

		echo "<option value='' >Day</option>";		

	}

			else

			echo "<option value='' selected>Day</option>";

			for($i=1;$i<32;$i++)

			{

			if($i<=9)

			echo "<option value='0$i'>0$i</option>";

			else

			echo "<option value='$i'>$i</option>";

			}

            echo "</select>";

	}

	

function getMonth($name,$value)

	{

		echo"<select name='$name' id='$name'  class='validate[required]'>";

		if($value!="")

		{

			if($value==1)

			$m="January";else if($value==2) $m="Feburary";else if($value==3) $m="March";

			else if($value==4) $m="April";else if($value==5) $m="May";else if($value==6) $m="Jume";

			else if($value==7) $m="July";else if($value==8) $m="August";else if($value==9) 

			$m="September";else if($value==10) $m="October";else if($value==11) $m="November";

			else if($value==12) $m="December";

			echo "<option value='$value' selected>$m</option>";



		}

		else

		echo "<option value='' >Month</option>";		

		echo"<option value='01'>January</option>";

		echo"<option value='02'>February</option>";

		echo"<option value='03'>March</option>";

		echo"<option value='04'>April</option>";

		echo"<option value='05'>May</option>";

		echo"<option value='06'>June</option>";

		echo"<option value='07'>July</option>";

		echo"<option value='08'>August</option>";

		echo"<option value='09'>September</option>";

		echo"<option value='10'>October</option>";

		echo"<option value='11'>November</option>";

		echo"<option value='12'>December</option>";

		echo "</select>";

					echo "";



	}

	

	///////////News & Ads

	function getYear($name,$value)

	{

			echo "<select name='$name'   id='$name' class='validate[required]'>";

		if($value!="")

		{

		echo "<option value='$value' selected>$value</option>";

		echo "<option value='' >Year</option>";		

		}

		else

		echo "<option value='' selected>Year</option>";

			for($i=1950;$i<=date('Y');$i++)

			{

			echo "<option value=$i>$i</option>";

			}

            echo "</select>";

						echo "	";

}

function select_query($tbl_name,$id,$col_name)

{

	$find1=mysql_query("SELECT * from $tbl_name where $col_name='$id'") or die(mysql_error());

	$info1=mysql_fetch_array($find1);

	return $info1;

}



function send_mail($to,$from,$from_name,$reply_to,$cc,$bcc,$mesg_id,$subject,$subject_admin,$message,$message_admin)

{

$headers  = 'From:'.$from_name.'<'.$from.'>' . "\r\n" .

	$headers .= 'Cc: ' .$cc. "\r\n";

	$headers .= 'Bcc: ' .$bcc. "\r\n";



	$headers .= "MIME-Version: 1.0\n" ; 

     $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n"; 

       $headers .= "X-Priority: 1 (Higuest)\n"; 

        $headers .= "X-MSMail-Priority: High\n"; 

        	$headers .= "Importance: High\n"; 

			$headers .='Reply-To:'.$reply_to . "\r\n";

        	$headers .= "Message-ID: <".$now.$mesg_id."@".$_SERVER['SERVER_NAME'].">". "\r\n";

			$headers .= "X-Mailer: PHP v".phpversion(). "\r\n";



   				$status   = mail($to,$subject,$message,$headers); 

			

   				$status_admin   = mail($from,$subject_admin,$message_admin,$headers); 

				echo $status ."&". $status_admin;

}



//////////////////////
function getLoan($name,$value,$name1)
{
echo "<select name='$name' id='$name' class='validate[required]'>";	
		if($value!="")
		{	
		$batch_name=mysql_query("select * from tbl_loan_issue WHERE name='$name1' And loan_id='$value'");
		$val1=mysql_fetch_array($batch_name);
		echo "<option value='$value' selected>$val1[amount]</option>";
		}
		else
		echo "<option  value='' selected>Select Issue Amount</option>";
$loan=mysql_query("select * from tbl_loan_issue WHERE name='$name1' ");
while($val=mysql_fetch_array($loan))
{
echo "<option value='$val[loan_id]' selected>$val[amount]</option>";		
}
}

//////////////////////////////

function getBatch($name,$value)
{
echo "<select name='$name' id='$name' class='validate[required]'>";	
		if($value!="")
		{	
		$batch_name=mysql_query("select * from  tbl_batch where batch_id='$value'");
		$val1=mysql_fetch_array($batch_name);
		echo "<option value='$value' selected>$val1[batch_name]</option>";
		}
		else
		echo "<option  value='' selected>Select Batch</option>";
$batch=mysql_query("select * from  tbl_batch");
while($val=mysql_fetch_array($batch))
{
echo "<option value='$val[batch_id]' >$val[batch_name]</option>";		
}
}
function getClass($name,$value)
{
echo "<select name='$name' id='$name' class='validate[required]'>>"  ;	
		if($value!="")
		{
		$class_name=mysql_query("select * from tbl_class where class_id='$value'");
		$val1=mysql_fetch_array($class_name);
		echo "<option value='$value' selected>$val1[class_name]</option>";
		}
		else
		echo "<option value='' selected>Select Class</option>";
$class=mysql_query("select * from tbl_class");
while($val2=mysql_fetch_array($class))
{
	echo "<option value='$val2[class_id]'>$val2[class_name]</option>";
	}
	}

function getName($name,$value,$status,$loan_status,$username)
{
echo "<select name='$name' id='$name' class='validate[required]'>"  ;	
		if($value!="")
		{
		$section_name=mysql_query("select * from tbl_borrower_info where id='$value'");
		$val1=mysql_fetch_array($section_name);
		echo "<option value='$value' selected>$val1[name]</option>";
		}
		else
		echo "<option value=''>Select Name</option>";
$section=mysql_query("select * from tbl_borrower_info where status='$status' AND loan_status='$loan_status' AND user_by='$username' ");
while($val=mysql_fetch_array($section))
{
	echo "<option value='$val[id]' >$val[name]</option>";
	}
	}
function getAdmissionNo($name,$value,$school_code)
{
echo "<select name='$name' id='$name' class='validate[required]'>>"  ;	
		if($value!="")
		{
		$admission_no=mysql_query("select * from tbl_student_info where admission_no='$value'");
		$val1=mysql_fetch_array($admission_no);
		echo "<option value='$value' selected>$val1[admission_no]</option>";
		}
		else
		echo "<option selected>Select Admission No</option>";
$admission_no1=mysql_query("select * from tbl_student_info WHERE school_code='$school_code'");
while($val=mysql_fetch_array($admission_no1))
{
	echo "<option value='$val[admission_no]'>$val[admission_no]</option>";
	}
	}




function getSubject($name,$value,$fun_no,$ch)

{
echo $ch;
echo"<select name='$name' id='$name' style='width:180px;' class='validate[required]' onchange='getSubject(this.value,$fun_no)'>";

	$course=mysql_query("select * from  tbl_du_subject");

	if($value!="")
	{
	
$val_sub=mysql_fetch_array(mysql_query("select * from  tbl_du_subject where subject_code='$value'"));
	echo "<option value='$value'>$val_sub[subject_name]</option>";
		
	}	else

	{

	echo "<option value=''>Select</option>";

	}

	while($val=mysql_fetch_array($course))

	echo "<option value='$val[subject_code]'>$val[subject_name]</option>";



	

echo"</select>";

}





function send_sms($mobile_no,$sms,$sender_id)
{
$destination=$mobile_no;
$message=$sms;
$username = "click2school";
$password = "147258";
$senderid= $sender_id;

//$from = "SBT";

$message = str_replace(" ", "%20",$message);

$url="http://203.129.203.243/blank/sms/user/urlsms.php?username=".$username."&pass=".$password."&senderid=".$senderid."&dest_mobileno=".$destination."&message=".$message."&response=Y";

$url;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
$CurlContent = curl_exec ($ch);
curl_close ($ch);
}
}

?>