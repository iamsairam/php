<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
	<form method="post" enctype="multipart/form-data">
<div class="container">
	<h1 class="text-center text-muted">Registration</h1>
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" name="name" class="form-control">
	</div>
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
	<div class="form-group">
	<label class="form-label" for="dob">DOB</label>
	<input type="date" name="dob" class="form-control">
	</div>	
	<div class="form-group">
		<label for="gender" class="form-check-label">Gender</label>
	</div>
		<div class="form-check form-check-inline">
		<label for="male"  class="form-check-label"><input type="radio" name="gender" value="MALE" class="form-check-input">Male</label>
	</div>
		<div class="form-check form-check-inline">
		<label for="female"  class="form-check-label"><input type="radio" name="gender" value="FEMALE" class="form-check-input">Female</label>
	</div></div>
	<div class="form-group mt-1">
		<label for="address">Address</label>
		<textarea class="form-control" rows="4" name="address"></textarea>
	</div>
	<div class="form-group">
		<label for="country">Country</label>
		<select class="form-control" name="country">
			<option>INDIA</option>
			<option>USA</option>
			<option>UK</option>
			<option>Others</option>
		</select>
	</div>
	<div class="form-group">
		<label for="skills">SKILLS</label>
		<div>
	<div class="form-check form-check-inline">
		<input type="checkbox" name="skill[]" value="HTML" class="form-check-input">
		<label for="html" class="form-check-label">HTML</label>
	</div>
	<div class="form-check form-check-inline">
		<input type="checkbox" name="skill[]" value="CSS" class="form-check-input">
	<label for="css" class="form-check-label">CSS</label>
	</div>
		<div class="form-check form-check-inline">
		<input type="checkbox" name="skill[]" value="JavaScript" class="form-check-input">
		<label for="inlineCheckbox1" class="form-check-label">JAVASCRIPT</label>
	</div>
		<div class="form-check form-check-inline">
		<input type="checkbox" name="skill[]" value="JQUERY" class="form-check-input">
	<label for="inlineCheckbox2" class="form-check-label">JQUERY</label>
	</div>
		<div class="form-check form-check-inline">
		<input type="checkbox" name="skill[]" value="BOOTSTRAP" class="form-check-input">
	<label for="html" class="form-check-label">BOOTSTRAP</label>
	</div>
		<div class="form-check form-check-inline">
		<input type="checkbox" name="skill[]" value="PHP" class="form-check-input">
	<label for="html" class="form-check-label">PHP</label></div>
	</div>
	</div>
	<div class="form-group">
		<label class="choose">Please Upload Your Profile Picture</label>
		<input type="file" name="file" class="form-control-file">
	</div>
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
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$country=$_POST['country'];
$skill=implode(",",$_POST['skill']);

$imgname=$_FILES['file']['name'];
$imgtmp=$_FILES['file']['tmp_name'];
$path="upload/".basename($imgname);
move_uploaded_file($imgtmp,$path);

$conn=mysqli_connect("localhost","root","","foods");
$query="INSERT INTO userdetails(name,email,phone,password,dob,gender,address,country,skills,imagename)VALUES('$name','$email','$phone','$password','$dob','$gender','$address','$country','$skill','$imgname')";
if(mysqli_query($conn,$query)){
echo "SUCCESS";
}
else{
	echo "FAIL";
}
}
?>
</body>
</html>