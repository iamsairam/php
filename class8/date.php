<!DOCTYPE html>
<html>
<head>
	<title>Date</title>
</head>
<body>
<?php
$dates=date("d:m:y");
$date1=date("d:M:Y");
echo "$date1"."<br>";
echo "$dates"."<br>";
date_default_timezone_set("asia/calcutta");
echo date("h:i:s A")."<br>";
?>
</body>
</html>