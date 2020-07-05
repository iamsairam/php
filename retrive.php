<!DOCTYPE html>
<html>
<head>
	<title>retrive</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
<div class="table-responsive table-sm">
<table class="table table-striped table-bordered">
	<tr class="bg-dark text-light">
	<th>Sl-NO</th>
	<th>NAME</th>
	<th>EMAIL</th>
	<th>PHONE</th>
	<th>PASSWORD</th>
	<th>D.O.B</th>
	<th>GENDER</th>
	<th>ADDRESS</th>
	<th>COUNTRY</th>
	<th>SKILLS</th>
	<th>DP</th>
	<th>Action</th>
	<th>Action</th>
	</tr>
	<?php
$conn=mysqli_connect("localhost","root","","foods");
	$query="SELECT * FROM userdetails";
	if ($res=mysqli_query($conn,$query)) {
		if (mysqli_num_rows($res)>0) {
			while ($row=mysqli_fetch_array($res)) {
			echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['email']."</td>";
				echo "<td>".$row['phone']."</td>";
				echo "<td>".$row['password']."</td>";
				echo "<td>".$row['dob']."</td>";
				echo "<td>".$row['gender']."</td>";
				echo "<td>".$row['address']."</td>";
				echo "<td>".$row['country']."</td>";
				echo "<td>".$row['skills']."</td>";
				echo "<td><img src='upload/".$row['imagename']."' height='100px' width='100px'></td>";
				echo "<td><a class='btn btn-warning btn-block'  href='update.php?id=".$row['id']."'>UPDATE</a></td>";
				echo "<td><a class='btn btn-danger btn-block' href='delete.php?id=".$row['id']."'>DELETE</a></td>";
				echo "</tr>";			
			}
		}
	}

	?>
</table>
</div>
</div>
</body>
</html>


