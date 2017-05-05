<?php
$arr1 = [4=>2,5=>3];
$arr2 = [1=>10,2=>11];
/*try{
$arr3 = array_combine($arr1,$arr2);
}
catch(Exception $e){
	print_r($e->getMessage());
	}
print_r($arr3);*/
$let = strstr("My name is ankur",'11ankur');
var_dump(date('d,F Y'));
$imageinfo = getimagesize("../images/big6.jpg");
//print_r($_SERVER['HTTP_USER_AGENT']);
echo "<br>";

echo $string = "My name is ANkur";
$i = 0;
$len = strlen($string);
$result = "";
while($i<=$len){
	if($string[$i] == " " || $i==$len){
		$wordLength = strlen($temp);
		while($wordLength>=0){
			$result .=$temp[$wordLength];
			$wordLength--;
		}
		$result .=" ";
		$temp = "";
	}
	$temp .=$string[$i];
	$i++;
}

echo $result;

$array = [1,3,4];
$arrayLength = count($array);
$total = ($arrayLength+1)*($arrayLength+2)/2;
for($i=0;$i<$arrayLength;$i++){
	$total -=$array[$i];
	}
echo $total;
?>
