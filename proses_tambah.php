<?php

include 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$ipk = $_POST['ipk'];
$id_jurusan = $_POST['id_jurusan'];

mysqli_query($koneksi,

"INSERT INTO mahasiswa VALUES(

'$nim',
'$nama',
'$tempat_lahir',
'$tanggal_lahir',
'$ipk',
'$id_jurusan'

)"

);

header("location:DaftarMahasiswa.php");

?>