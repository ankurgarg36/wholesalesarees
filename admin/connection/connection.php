<?PHP
define('ENV_PROD', 'PROD');
$host = ($_SERVER['ENV'] == ENV_PROD) ?
    sprintf("%s/wholesalesarees/", $_SERVER['HTTP_HOST']) : $_SERVER['HTTP_HOST'];
define('HOST', $host);
$localhost="localhost";
$user="root";
$pass="root";
$database="bhawana_sarees";
$link=@mysql_connect("localhost",$user,$pass) or die("not connected ") ;
mysql_select_db('bhawana_sarees') or die("could not connect to the database");
?>
