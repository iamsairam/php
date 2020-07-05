<!DOCTYPE html>
<html>
<head>
	<title>fileuploads</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<input type="file" name="upfile">
<input type="submit" name="btn">	
</form>
<?php

if (isset($_POST['btn'])) {
	$filename=$_FILES['upfile']['name'];
	echo $filename."<br>";
	$path="uploads/".basename($filename);
	move_uploaded_file($_FILES['upfile']['tmp_name'], $path);
	echo "success fully saved!!!";
}
?>
</body>
</html>