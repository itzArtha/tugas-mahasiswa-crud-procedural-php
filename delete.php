<?php
//menangkap value/data dari url
$Nim        = $_GET['Nim'];

//membuat koneksi
include "koneksi.php";

//membuat query delete data
$qry = "DELETE FROM jurusan WHERE Nim = '$Nim'";
$exec = mysqli_query($con, $qry) or die(mysqli_error($con));

//mengecek berhasil atau tidak
if ($exec) {
    echo "<script>alert('Data berhasil di-delete');
            window.location = 'jurusan.php'</script>";
} else {
    echo "<script>alert('Data gagal di-delete');
            window.location = 'jurusan.php'</script>";
}