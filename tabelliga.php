<?php
$servername="localhost";
$username="root";
$password="";
$dbname="my_db";

$conn=mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
	die("Connection failed:".mysqli_connect_error());
}
$sql="INSERT INTO liga(kode, negara, champion)
VALUES ('jer', 'jerman','4')";

if(mysqli_query($conn, $sql)){
	echo "new record created succesfully";
}else{
	echo "error:".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>