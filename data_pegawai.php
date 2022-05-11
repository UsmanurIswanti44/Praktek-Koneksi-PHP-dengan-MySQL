<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pegawai</title>
</head>
<body>
    <header>
        <h3>Daftar Pegawai</h3>
    </header>
    <nav>
        <a href="tambah.php">[+] Tambah Baru</a>
    </nav>
    <br>
    <table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jabatan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM tabel_pegawai";
        $query = mysqli_query($db, $sql);

        while($row = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$row["ID"]."</td>";
            echo "<td>".$row["Nama"]."</td>";
            echo "<td>".$row["Alamat"]."</td>";
            echo "<td>".$row["Jabatan"]."</td>";

            echo "<td>";
            echo "<a href='edit.php?id=".$row['ID']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$row['ID']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>