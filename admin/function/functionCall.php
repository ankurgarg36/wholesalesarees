<?php
class FunctionCall
{
	function PageName($page_id)
	{
		switch($page_id)
		{
			case "entry_form_main":
			require('entry_form_main.php');
			break;
			case "update_form_main":
			require('update_form_main.php');
			break;
			case "entry_Fee":
			require('entry_Fee.php');
			break;
			case "hostal_fee":
			require('hostal_fee.php');
			break;
			case "student_details":
			require('student_details.php');
			break;
			case "col":
			require('color.php');
			break;
			case "len":
			require('lengha.php');
			break;
			case "suit":
			require('suit.php');
			break;
			case "saree":
			require('saree.php');
			break;
			case "mat":
			require('material.php');
			break;
			case "fees":
			require('fee_management/fees.php');
			break;
			case "fee_structure":
			require('fee_management/fee_structure.php');
			break;			
			case "fee_details":
			require('fee_management/fee_details.php');
			break;
			
			case "attendance_details":
			require('attendance/attendance_details.php');
			break;
			case "allotment":
			require('allotment.php');
			break;
			case "change_password":
			require('change_password.php');
			break;
			case "master_data_entry1":
			require('master_data_entry1.php');
			break;			
            default: echo "Hello";
			break; 
		}
	}
}
class master_data_entry1
{
	function del($del,$tbl_name,$prid,$del_col)
	{
				$parts = explode(":",$del);
				$opr=$parts[0];
				$s_id=$parts[1];
				$delete=mysqli_query($link,"DELETE FROM $tbl_name WHERE 
				$del_col='$s_id'") or die(mysql_error());
				if($delete==1)
				return 1;
				else
				return 0;
	}
}
?>