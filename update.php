<!DOCTYPE html>
<html>
<head>
	<title>update</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
	<form method="post" enctype="multipart/form-data" class="container">
<?php
$id=$_GET['id'];
echo "$id"."<br>";
$conn=mysqli_connect("localhost","root","","foods");
$query="SELECT * FROM userdetails WHERE id='$id'";
if ($res=mysqli_query($conn,$query)) {
	if (mysqli_num_rows($res) == 1) {
		while ($row=mysqli_fetch_array($res)) {
			echo "UpdateName:<input type='text' name='upname' class='form-control' value=".$row['name'].">";
			echo "UpdateEmail:<input type='email' name='upemail' class='form-control' value=".$row['email'].">";
			echo "UpdatePhone:<input type='text' name='upphone' class='form-control' value=".$row['phone'].">";
			echo "UpdatePassword:<input type='password' name='uppwd' class='form-control' value=".$row['password'].">";
			echo "UpdateDOB:<input type='date' name='updob' class='form-control' value=".$row['dob'].">";
			echo "<label class='form-check-label'>UpdateGender</label>"."<br>";
			if ($row['gender'] == "MALE") {
			echo "<label class='form-check-label ml-5'><input type='radio' name='upgender' value='MALE' class='form-check-input' checked='true'>Male</label>";
			echo "<label class='form-check-label ml-5'><input type='radio' name='upgender' value='FE-MALE'class='form-check-input'>FeMale</label>";
			}else if($row['gender'] == "FEMALE"){
			echo "<label class='form-check-label ml-5'><input type='radio' name='upgender' value='MALE'class='form-check-input'>Male</label>";
			echo "<label class='form-check-label ml-5'><input type='radio' name='upgender' value='FE-MALE' class='form-check-input' checked='true'>FeMale</label>";
			}
			
			echo "<br>";
			echo "Updateaddress:<textarea name='upaddress' class='form-control'>".$row['address']."</textarea>";

			echo "Update country <select class='form-control' name='upcountry'>";
			echo "<option>".$row['country']."</option>";
			echo "<option>INDIA</option>";
			echo "<option>Others</option>";
			echo "</select>";
			echo "<br>";
			//echo "skills";
			echo "Here your skills <mark class='bg-warning'>".$row['skills']."</mark>";
			echo "

					<div class='form-group mt-2'>
		<label for='skills' >Update Your SKILLS</label>
		<div>
	<div class='form-check form-check-inline'>
		<input type='checkbox' name='upskill[]' value='HTML' class='form-check-input'>
		<label for='html' class='form-check-label'>HTML</label>
	</div>
	<div class='form-check form-check-inline'>
		<input type='checkbox' name='upskill[]' value='CSS' class='form-check-input'>
	<label for='css' class='form-check-label'>CSS</label>
	</div>
		<div class='form-check form-check-inline'>
		<input type='checkbox' name='upskill[]' value='JavaScript' class='form-check-input'>
		<label for='inlineCheckbox1' class='form-check-label'>JAVASCRIPT</label>
	</div>
		<div class='form-check form-check-inline'>
		<input type='checkbox' name='upskill[]' value='JQUERY' class='form-check-input'>
	<label for='inlineCheckbox2' class='form-check-label'>JQUERY</label>
	</div>
		<div class='form-check form-check-inline'>
		<input type='checkbox' name='upskill[]'' value='BOOTSTRAP' class='form-check-input'>
	<label for='html' class='form-check-label'>BOOTSTRAP</label>
	</div>
		<div class='form-check form-check-inline'>
		<input type='checkbox' name='upskill[]' value='PHP' class='form-check-input'>
	<label for='html' class='form-check-label'>PHP</label></div>
	</div>
	</div>
			";
			echo "<p>Update Your Dp</p>";
			echo "<img src='upload/".$row['imagename']."' height='100px' width='100px'>";
			echo "<input type='file' class='form-control-file' name='upfile'>";


			echo "<input type='submit' value='UPDATE' class='btn btn-outline-success btn-lg btn-block my-3' name='upbtn'>";
			echo "</form>";

		}
	}else{echo "number of rows failed";}
}else{echo "query failed";}


if (isset($_POST['upbtn'])) {
$name=$_POST['upname'];
$email=$_POST['upemail'];
$phone=$_POST['upphone'];
$password=$_POST['uppwd'];
$dob=$_POST['updob'];
$gender=$_POST['upgender'];
$address=$_POST['upaddress'];
$country=$_POST['upcountry'];

$skill=implode(",",$_POST['upskill']);

$imgname=$_FILES['upfile']['name'];
$imgtmp=$_FILES['upfile']['tmp_name'];
$path="upload/".basename($imgname);
move_uploaded_file($imgtmp,$path);

$query="UPDATE userdetails SET name='$name',email='$email',phone='$phone',password='$password',dob='$dob',gender='$gender',address='$address',country='$country',skills='$skill',imagename='$imgname' WHERE id=$id";
if(mysqli_query($conn,$query)){
echo "<h1 class='text-center text-success'>UPDATED SUCCESSFULLY</h1>";
}
else{
	echo "FAIL";
}
}


?>
</body>
</html>