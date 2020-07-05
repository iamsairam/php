<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
	<form method="post" enctype="multipart/form-data">
<div class="container">
	<h1 class="text-center text-muted">LOGIN</h1>
	<div class="form-group">
		<label for="uid">UserID</label>
		<input type="uid" name="uid" class="form-control">
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" name="password" class="form-control">
	</div>
	<div>
	<div class="row">
	<div class="col-6">
	<input type="reset" name="" class="btn btn-block btn-outline-warning"></div>
	<div class="col-6">
	<input type="submit" name="subbtn" class="btn btn-block btn-outline-success"></div>
</div>
</div>
</form>
<?php
if (isset($_POST['subbtn'])) {
$uid=$_POST['uid'];
$password=$_POST['password'];
session_start();
$conn=mysqli_connect("localhost","root","","foods");
$query="SELECT * FROM signupform WHERE (email='$uid' OR phone='$uid') AND password='$password' ";
if($res=mysqli_query($conn,$query)){
if (mysqli_num_rows($res)) {
	while ($row=mysqli_fetch_array($res)) {
		echo "success";
		$_SESSION['id']="$uid";
		header("Location:inbox.php");
	}
}
}
}
?>
<?php
if (isset($_GET['err'])) {
	echo "please login properly";
}
?>
<?php
if (isset($_GET['logedout'])) {
	echo "SUCCESS FULLY LOGOUT";
}
?>
</body>
</html>