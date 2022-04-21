<?php
$nim = $_GET['Nim'];
include "koneksi.php";
$qry = "SELECT * FROM jurusan WHERE Nim = '$nim'";
$exec = mysqli_query($con, $qry);
$data = mysqli_fetch_array($exec);
?>

<html>

<head>
    <title>Halaman edit jurusan mahasiswa</title>
</head>

<body>
    <form action="proses_update.php" method="POST">
        <fieldset>
            <legend>Form Update Jurusan</legend>
            <b>Lengkapi Biodata Jurusan Dengan Benar</b>
            <table>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><input type="text" name="Nim" value="<?php echo $data['Nim'] ?>" readonly></td>
                </tr>
                <tr>
                    <td>Nama mahasiswa</td>
                    <td>:</td>
                    <td><input type="text" name="Nama_mahasiswa" value="<?php echo $data['Nama_mahasiswa'] ?>"></td>
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
                    <td><input type="submit" value="Update"><input type="button" value="kembali"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>