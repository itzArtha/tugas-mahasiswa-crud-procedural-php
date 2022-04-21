<?php
//menangkap value/data dari form
$Nim             = $_POST['Nim'];
$Nama_mahasiswa  = $_POST['Nama_mahasiswa'];
$Kode_jurusan    = $_POST['Kode_jurusan'];
$Nama_jurusan    = $_POST['Nama_jurusan'];

//membuat koneksi
include "koneksi.php";

//membuat query insert data
$qry = "INSERT INTO jurusan VALUES ('$Nim', '$Nama_mahasiswa', '$Kode_jurusan', '$Nama_jurusan')";
$exec = mysqli_query($con, $qry) or die(mysqli_error($con));

//mengecek berhasil atau tidak
if($exec){
    echo "<script>alert('Data berhasil disimpan');
            window.location = 'jurusan.php'</script>";
}else{
    echo "<script>alert('Data gagal disimpan');
            window.location = 'jurusan.php'</script>";
}