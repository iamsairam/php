<!DOCTYPE html>
<html>
<head>
	<title>delet</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<?php
$id=$_GET['id'];
$conn=mysqli_connect("localhost","root","","foods");
$query="DELETE FROM userdetails where id='$id' ";
if ($res=mysqli_query($conn,$query)) {
	echo "<h1 class='text-center text-danger'>succsess</h1>";
}else{
	echo "queryfail";
}
?>
</body>
</html>