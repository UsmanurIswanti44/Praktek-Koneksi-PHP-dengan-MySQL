<?php

include("config.php");

if( isset($_GET['id']) ){

    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM tabel_pegawai WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: data_pegawai.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}
?>