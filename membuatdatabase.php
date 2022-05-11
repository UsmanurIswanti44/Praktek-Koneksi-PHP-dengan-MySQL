<?php
$servername="localhost";
$username="root";
$password="";

//create connection
$conn=mysqli_connect($servername, $username, $password);

if(!$conn){
	die("Connection Failed:".mysqli_connect_error());
}
//check connection
$sql="CREATE DATABASE myDB";
if(mysqli_query($conn, $sql)){
	echo "Database created succesfully";
}else{
	echo "Error creating Database :".mysqli_error($conn);
}
mysqli_close($conn);
?>