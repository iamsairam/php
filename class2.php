<!DOCTYPE html>
<html>
<head>
	<title>class2</title>
</head>
<body>
<?php
function sai(){
	$a=10;
	$b=20;
	$c=$a+$b;
	echo "$c"."<br>";
}
sai();

function sairam($a,$b){
	$c=$a+$b;
	echo "$c"."<br>";
}
sairam(30,20);
sairam(10,10);

function ram($c=2,$d=0){
	$g=$c+$d;
	echo "$g"."<br>";
}
ram(30,1);
ram(12);
ram();
ram(20,100);
?>
<h1>Get the text values using php</h1>
<form method="post">
	Name:<input type="text" name="name"><br>
	Email:<input type="email" name="email"><br>
	password:<input type="password" name="pwd"><br>
	<input type="submit" name="btn">
	<?php
	if (isset($_POST['btn'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$pwd=$_POST['pwd'];
		echo "<hr>";
		echo "$name"."<br>"."$email"."<br>"."$pwd";
	}
	?>
</form>
</body>
</html>