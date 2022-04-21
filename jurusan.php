<?php
include "koneksi.php";
$namaMahasiswa = "";
$dataMahasiswa = [];
if(isset($_POST['nama'])) {
    $namaMahasiswa = $_POST['nama'];
}
$qry = "SELECT * FROM jurusan WHERE Nama_mahasiswa LIKE '%{$namaMahasiswa}%'";
$exec = mysqli_query($con, $qry);
while($rows = mysqli_fetch_array($exec))
    $dataMahasiswa[] = $rows;
?>
<html>
<head>
    <title>Halaman Input Jurusan</title>
    <link rel="stylesheet" href="jurusan.css">
</head>
<body>
    <form action="proses_insert.php" method="POST">
        <fieldset>
            <legend>Form Input Jurusan</legend>
            <b>Lengkapi jurusan anda Dengan Benar</b>
            <table>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><input type="text" name="nim"></td>
                </tr>
                <tr>
                    <td>Nama mahasiswa</td>
                    <td>:</td>
                    <td><input type="text" name="nama_mhs"></td>
                </tr>
                <tr>
                    <td>Kode jurusan</td>
                    <td>:</td>
                    <td>
                        <select name="Kode_jurusan">
                            <option value="J01">J01</option>
                            <option value="J02">J02</option>
                            <option value="J03">J03</option>
                            <option value="J04">J04</option>
                        </select>
                    </td>   
                </tr>
                <tr>
                    <td>Nama jurusan</td>
                    <td>:</td>
                    <td>
                        <select name="Nama_jurusan">
                            <option value="SistemKomputer">Sistem Komputer</option>
                            <option value="SistemInformasi">Sistem Informasi</option>
                            <option value="TeknologiInformasi">Teknologi Informasi</option>
                            <option value="BisnisDigital">Bisnis Digital</option>
                        </select>
                    </td>   
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="Simpan"><input type="button" value="kembali"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <h2>Data Jurusan Mahasiswa</h2>
    <form method="post" action="#">
        <input name="nama" placeholder="Cari nama mahasiswa" />
        <button type="submit">Cari</button>
    </form>
    <table border="1">
        <tr>
            <th>Nim</th>
            <th>Nama Mahasiswa</th>
            <th>Kode jurusan</th>
            <th>Nama jurusan</th>
            <th>Action</th>
        </tr>
        <?php
        foreach ($dataMahasiswa as $mahasiswa) {
        ?>
            <tr>
                <td><?php echo $mahasiswa['Nim'] ?></td>
                <td><?php echo $mahasiswa['Nama_mahasiswa'] ?></td>
                <td><?php echo $mahasiswa['Kode_jurusan'] ?></td>
                <td><?php echo $mahasiswa['Nama_jurusan'] ?></td>
                <td>
                    <a href="edit.php?Nim=<?php echo $mahasiswa['Nim'] ?>"><button>Edit</button></a>
                    <a href="delete.php?Nim=<?php echo $mahasiswa['Nim'] ?>"><button>Delete</button></a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>