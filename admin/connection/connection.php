<?PHP
$localhost="localhost";
$user="root";
$pass="";
$database="bhawana_sarees";
$link=mysql_connect("localhost",$user,$pass) or die("not connected ") ;
mysql_select_db('bhawana_sarees') or die("could not connect to the database");
?>
