<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: data_pegawai.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM tabel_pegawai WHERE id=$id";
$query = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>

<body>
    <header>
        <h3>Edit Data Pegawai</h3>
    </header>

    <form action="proses_edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $row['Nama'] ?>" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"><?php echo $row['Alamat'] ?></textarea>
        </p>
        <p>
            <label for="jabatan">Jabatan: </label>
            <input type="text" name="jabatan" placeholder="Jabatan" value="<?php echo $row['Jabatan'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>
    </form>
    </body>
</html>
