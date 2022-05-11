<!DOCTYPE html>
<html>
<head>
    <title>Update Data Pegawai</title>
</head>

<body>
    <header>
        <h3>Tambah Data Pegawai</h3>
    </header>

    <form action="proses_tambah.php" method="POST">

        <fieldset>
         <p>
            <label for="id">ID: </label>
            <input type="text" name="id" placeholder="ID" />
        </p>
        <p>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <label for="nama">Jabatan: </label>
            <input type="text" name="jabatan" placeholder="Jabatan" />
        </p>
        <p>
            <input type="submit" value="Tambah" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>
