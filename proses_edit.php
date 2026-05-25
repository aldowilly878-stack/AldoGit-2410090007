<?php

include 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$ipk = $_POST['ipk'];
$id_jurusan = $_POST['id_jurusan'];

mysqli_query($koneksi,

"UPDATE mahasiswa SET

nama='$nama',
tempat_lahir='$tempat_lahir',
tanggal_lahir='$tanggal_lahir',
ipk='$ipk',
id_jurusan='$id_jurusan'

WHERE nim='$nim'"

);

header("location:DaftarMahasiswa.php");

?>