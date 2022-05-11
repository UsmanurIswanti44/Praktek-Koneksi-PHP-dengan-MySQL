<?php
// Deklarasi server, username, password, dan database
$servername="localhost";
$username="root";
$password="";
$dbname="db_bukutamu";

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek Koneksi
if(!$conn){
  die("Connection failed: ". mysqli_connect_error());
}

// Buat tabel
$sql= "CREATE TABLE bukutamu(
ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Nama VARCHAR(200) NOT NULL,
Email VARCHAR(50) NOT NULL,
Isi text
)";
if(mysqli_query($conn, $sql)){
  echo "Table created succesfully";
} else{
  echo "Error creating table". mysqli_error($conn);
}

// Stop Connection
mysqli_close($conn);
?>