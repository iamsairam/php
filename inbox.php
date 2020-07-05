<?php
session_start();
if (!isset($_SESSION['id'])) {
	echo "string";
	header("Location:login.php?err=true");
}
echo $_SESSION['id']."<br>";
echo "<a href='logout.php'>LOGOUT</a>";
?>


