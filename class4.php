<!DOCTYPE html>
<html>
<head>
	<title>class4</title>
</head>
<body>
<?php
echo "<h1>assending sort() method</h1>";
$arr=array("apple","banana","pomogranate","pappaya","guava","pinapple","ganesh");
$len=count($arr);
sort($arr);
for ($i=0; $i <$len ; $i++) { 
	echo $arr[$i]."<br>";
}
echo "<hr>";
?>
<?php
echo "<h1>dessending rsort() method</h1>";
$arr=array("apple","banana","pomogranate","pappaya","guava","pinapple","ganesh");
$len=count($arr);
rsort($arr);
for ($i=0; $i <$len ; $i++) { 
	echo $arr[$i]."<br>";
}
echo "<hr>";
?>
<?php
echo "<h1>value based assendingorder asort() method</h1>";
$arr=array("apple"=>"redcolor","banana"=>"yellowcolor","pomogranate"=>"orangecolor","pappaya"=>"greenyello","guava"=>"greencolor","pinapple"=>"redishyellow","ganesh"=>"god");
$len=count($arr);
asort($arr);
foreach ($arr as $x => $y) {
	echo "$x"."-->"."$y"."<br>";
}
echo "<hr>";
?>
<?php
echo "<h1>key based assendingorder asort() method</h1>";
$arr=array("apple"=>"redcolor","banana"=>"yellowcolor","pomogranate"=>"orangecolor","pappaya"=>"greenyello","guava"=>"greencolor","pinapple"=>"redishyellow","ganesh"=>"god");
$len=count($arr);
ksort($arr);
foreach ($arr as $x => $y) {
	echo "$x"."-->"."$y"."<br>";
}
echo "<hr>";
?>
<?php
echo "<h1>value based desendingorder asort() method</h1>";

$arr=array("apple"=>"redcolor","banana"=>"yellowcolor","pomogranate"=>"orangecolor","pappaya"=>"greenyello","guava"=>"greencolor","pinapple"=>"redishyellow","ganesh"=>"god");
$len=count($arr);
arsort($arr);
foreach ($arr as $x => $y) {
	echo "$x"."-->"."$y"."<br>";
}
echo "<hr>";
?>
<?php
echo "<h1>key based desendingorder asort() method</h1>";
$arr=array("apple"=>"redcolor","banana"=>"yellowcolor","pomogranate"=>"orangecolor","pappaya"=>"greenyello","guava"=>"greencolor","pinapple"=>"redishyellow","ganesh"=>"god");
$len=count($arr);
krsort($arr);
foreach ($arr as $x => $y) {
	echo "$x"."-->"."$y"."<br>";
}
echo "<hr>";
?>
</body>
</html>