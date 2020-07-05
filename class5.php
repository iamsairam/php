<!DOCTYPE html>
<html>
<head>
	<title>class5</title>
</head>
<body>
<h1>Super Global Variables</h1>
<mark> FRCS PEG </mark>
<pre>
	1.GLOBALS[''];
	2.SERVER[''];
	3.REQUEST[''];
	4.FILE[''];
	5.ENV[''];
	6.SESSION[''];
	7.COOKIE[''];
	8.POST[''];
	9.GET[''];
</pre>
	<br>
<?php
echo "<h1>GLOBAL Variables</h1>";
	$a = 10;
	$b = 20;
	$d = 120;
	function sai(){
		$GLOBALS['c']=$GLOBALS['a']+$GLOBALS['b'];
		echo $GLOBALS['d']."<br>";
		}
	sai();
	echo "$c";
?>
<?php 

echo "<h1>SERVER Variables</h1>";
echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SCRIPT_NAME']."<br>";
echo $_SERVER['HTTP_HOST']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['REQUEST_METHOD']."<br>";
echo $_SERVER['HTTP_USER_AGENT'];
?>
<hr>
<h1>REQUEST METHOD</h1>
<form method="post">
	Name<input type="text" name="name"><br>
	Email<input type="email" name="email"><br>
	Password<input type="password" name="pwd"><br>
	<input type="submit" name="btn">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$pass=$_REQUEST['pwd'];
	echo $name."<br>".$email."<br>".$pass."<br>";
}
echo "<hr>";
?>
<h1>POST METHOD</h1>
<form method="post">
	Name<input type="text" name="name1"><br>
	Email<input type="email" name="email2"><br>
	Password<input type="password" name="pwd1"><br>
	<input type="submit" name="btn">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$name1=$_POST['name1'];
	$email2=$_POST['email2'];
	$pass1=$_POST['pwd1'];
	echo $name1."<br>".$email2."<br>".$pass1."<br>";
}
echo "<hr>";
?>
</body>
</html>