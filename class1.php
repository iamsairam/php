<!DOCTYPE html>
<html>
<head>
	<title>class1</title>
</head>
<body>
<?php
#local variables
function sairam(){
$a=100;
$b=200;
$c=$a+$b;
echo "Local variables : "."$c"."<br>";
}
sairam();

#gloabal variables
function sai(){
	global $a,$b,$c;
	$a=10;
	$b=20;
	$c=$a+$b;
}
sai();
echo "Global variables : "."$c"."<br>";

#static variables
function ram(){
static $d=12;
$d++;
echo "$d"."<br>";
}
ram();
ram();
ram();
#String Functions
$str="Hello Sai ram welcome to the Php World!";
echo "The length of ($str) is: ".strlen($str)."<br>";
echo "The length of ($str) is: ".str_word_count($str)."<br>";
echo "The length of ($str) is: ".strrev($str)."<br>";
echo "The length of ($str) is: ".str_replace("Php","JS",$str)."<br>";
echo "The length of ($str) is: ".strpos($str,"Sai")."<br>";

#constants
define("d", 100);
echo d;
?>

</body>
</html>