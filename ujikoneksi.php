<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Koneksi Database MySQL</title>
</head>
<body>
	<h1>Demo koneksi database MySQL</h1>
<?php
	$conn=mysqli_connect("localhost","root","","my_db");
	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL".mysqli_connect_errno();
		exit();
	}
?>
</body>
</html>