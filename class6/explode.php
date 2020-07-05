<!DOCTYPE html>
<html>
<head>
	<title>explode</title>
</head>
<body>
<?php
$string="Hello World iam sairam nagulavancha";
$arr=explode(" ", $string);
echo count($arr)."<br>";
foreach ($arr as $array) {
	echo "$array"."<br>";
}
?>
</body>
</html>