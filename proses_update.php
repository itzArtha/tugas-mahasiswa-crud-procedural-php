<?php
//menangkap value/data dari form
$Nim             = $_POST['Nim'];
$Nama_mahasiswa  = $_POST['Nama_mahasiswa'];
$Kode_jurusan    = $_POST['Kode_jurusan'];
$Nama_jurusan    = $_POST['Nama_jurusan'];

//membuat koneksi
include "koneksi.php";

//membuat query update data
$qry = "UPDATE jurusan SET Nama_mahasiswa = '$Nama_mahasiswa', Kode_jurusan = '$Kode_jurusan', 
        Nama_jurusan = '$Nama_jurusan' WHERE Nim = '$Nim'";
$exec = mysqli_query($con, $qry) or die(mysqli_error($con));

//mengecek berhasil atau tidak
if ($exec) {
    echo "<script>alert('Data berhasil diupdate');
            window.location = 'jurusan.php'</script>";
} else {
    echo "<script>alert('Data gagal diupdate');
            window.location = 'jurusan.php'</script>";
}
