<!DOCTYPE html>
<html>
<head>
	<title>class3</title>
</head>
<body>
<?php
$arr = array("apple","banana","pappaya","grapes","pomogtranates","mosambi","guava","pinaple");
$len=count($arr);
echo "<h1>array values retriving using for loop</h1>";
for ($i=0; $i <$len ; $i++) { 
	echo "$arr[$i].<br>";
}
echo "<h1>array values retriving using foreach loop</h1>";
foreach ($arr as $j) {
	echo "$j"."<br>";
}
?>

<?php
echo "<h1>Indexed array</h1>";
$arr1 = array("sairam","bharath","hari","jeevan","shyam","aman");
echo"<hr>";
$len1=count($arr1);

for ($i=0; $i <$len1 ; $i++) { 
	echo $arr1[$i]."<br>";

}echo "<hr>";
foreach ($arr1 as $n) {
	echo $n."<br>";
}echo "<hr>";
?>
<?php
echo "<h1>associative array</h1>";
$array1 = array("name" => "sai","email"=>"sai@gmail.com","age"=>12,"place"=>"Paritala");
$len2=count($array1);
foreach ($array1 as $x => $y) {
	echo "key is:".$x." | value ".$y."<br>";
}
?>
<?php
echo "<h1>MultiDimensional  Array</h1>";
$arr=array(
		   array("bmw","500K","Deisel"),
		   array("merce","400k","Petrol"),
		   array("jem","1220k","kirocyne")
		   );
$len=count($arr);
for ($i=0; $i <$len ; $i++) { 
	for ($j=0; $j <$len ; $j++) { 
		echo $arr[$i][$j]." ";
	}
	echo "<br>";
}

?>
</body>
</html>