<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST["alamat"];
    $jabatan = $_POST["jabatan"];
    

    // buat query
    $sql = "INSERT INTO tabel_pegawai (id, nama, alamat, jabatan) VALUE ('$id','$nama', '$alamat', '$jabatan')";
    $query = mysqli_query($db, $sql);
// apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: data_pegawai.php?status=sukses');
        // kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('Location: data_pegawai.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>
<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Penambahan Pegawai berhasil!";
            } else {
                echo "Penambahan gagal!";
            }
        ?>
    </p>
<?php endif; ?>