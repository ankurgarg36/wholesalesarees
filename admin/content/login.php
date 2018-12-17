<?php
session_start(); 
include("../connection/connection.php");
$username=$_REQUEST['username'];
echo $password=sha1($_REQUEST['password']);

$data=mysqli_query($link,"SELECT * FROM  tbl_admin_login where username='$username' ")or die(mysql_error());
	$info= mysqli_fetch_array($data);
	echo "<br>".$info['password'];
		if($password==$info['password'])
	{
		$_SESSION['username']=$username;
		$_SESSION['user_type']=$info['user_type'];

	
		
?>
	<script>
	//alert('yes!!! MAy I Goo...')
	window.location="dashboard.php";
		</script>
		<?php
	}
	else {
	?>
    <script>
		alert("User Name or Password is not Correct");
		window.location="../index.php";
		</script>
        <?php
	}
	?>
