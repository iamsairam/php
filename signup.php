<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
	<form method="post" enctype="multipart/form-data">
<div class="container">
	<h1 class="text-center text-muted">SIGNUP</h1>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label for="phone">Phone</label>
		<input type="text" name="phone" class="form-control">
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
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];

$conn=mysqli_connect("localhost","root","","foods");
$query="INSERT INTO signupform(email,phone,password)VALUES('$email','$phone','$password')";
if(mysqli_query($conn,$query)){
echo "SUCCESS";
header("Location:login.php");
}
else{
	echo "FAIL";
}
}
?>
</body>
</html>