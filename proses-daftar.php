<?php include("config.php");

// cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['daftar']))
{

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $tel = $_POST['tempat_lahir'];
    $tal = $_POST['tanggal_lahir'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $sp = $_POST['status_pegawai'];

    // buat query
    $sql = "INSERT INTO pendaftaran (nama, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, agama, status_pegawai) VALUE ('$nama', '$tel', '$tal', '$jk', '$alamat', '$agama', '$sp')";
    $query = mysqli_query($db, $sql);
    
    // apakah query simpan berhasil?
    if($query)
    {
        // kalau berhasil aihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    }else
    {
        //kalu gagal alihkan ke halaman index.php dengan status=gagal
        header('Location: index.php?status=gagal'); 
    }
    
} else {
    die("Akses dilarang...");
}
    ?>