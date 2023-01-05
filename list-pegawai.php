<?php include("config.php");?>

<html>
    <head>
        <title>System Informasi Kepegawaian</title>
    </head>
    <body>
        <header>
            <h3>System Informasi Kepegawaian</h3>
        </header>
        <nav>
            <a href="form-daftar.php">[+] Tambah Data</a>
        </nav>

        <br>

        <table border="1">

        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Agama</th>
                <th>Status Pegawai</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM pegawai";
            $query = mysqli_query($db, $sql);
            
            while($dp = mysqli_fetch_array($query))
            {
                echo"<tr>";
                echo"<td>".$dp['id']."</td>";
                echo"<td>".$dp['nama']."</td>";
                echo"<td>".$dp['tempat_lahir']."</td>";
                echo"<td>".$dp['tanggal_lahir']."</td>";
                echo"<td>".$dp['jenis_kelamin']."</td>";
                echo"<td>".$dp['alamat']."</td>";
                echo"<td>".$dp['agama']."</td>";
                echo"<td>".$dp['status_pegawai']."</td>";

                echo"<td>";
                echo"<a href='form-edit.php?id=".$dp['id'].">Hapus</a>";
                echo"<a href='hapus.php?id=".$dp['id'].">Hapus</a>";
                echo"</td>";
                echo"</tr>";
            }
            ?>
        </tbody>
        </table>
        <p>Total:<?php echo mysqli_num_rows($query)?></p>
    </body>
</html>