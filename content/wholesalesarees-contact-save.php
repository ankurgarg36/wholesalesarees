<?php
include('../admin/connection/connection.php');
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
echo $name.''.$email.''.$subject.''.$message;
$q="INSERT into tbl_contact (name,email,subject,message) VALUES('$name','$email','$subject','$message')";
mysql_query($q);

?>