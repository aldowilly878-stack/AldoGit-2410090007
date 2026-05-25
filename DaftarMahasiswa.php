<?php
include 'koneksi.php';

$cari = isset($_GET['cari'])
? $_GET['cari']
: '';

$data = mysqli_query($koneksi, "
SELECT mahasiswa.nim,
       mahasiswa.nama,
       mahasiswa.tempat_lahir,
       mahasiswa.tanggal_lahir,
       mahasiswa.ipk,
       jurusan.nama_jurusan,
       fakultas.nama_fakultas

FROM mahasiswa

JOIN jurusan
ON mahasiswa.id_jurusan = jurusan.id_jurusan

JOIN fakultas
ON jurusan.id_fakultas = fakultas.id_fakultas

WHERE mahasiswa.nama
LIKE '%$cari%'
");
?>

<!DOCTYPE html>
<html>

<head>

<title>Daftar Mahasiswa</title>

<style>

body{
    font-family: Times New Roman;
}

table{
    border-collapse: collapse;
    width: 95%;
}

th, td{
    border: 1px solid black;
    padding: 10px;
    text-align: center;
}

th{
    background-color: #f2f2f2;
}

</style>

</head>

<body>

<h2>Daftar Mahasiswa</h2>

<form method="GET">

<input type="text"
name="cari"
placeholder="Cari nama">

<button type="submit">
Cari
</button>

</form>

<a href="tambah.php">

<button>
Tambah Data
</button>

</a>

<table>

<tr>
    <th>NIM</th>
    <th>Nama</th>
    <th>Tempat Lahir</th>
    <th>Tanggal Lahir</th>
    <th>Fakultas</th>
    <th>Jurusan</th>
    <th>IPK</th>
</tr>

<?php while($d = mysqli_fetch_array($data)){ ?>

<tr>

<td><?php echo $d['nim']; ?></td>

<td><?php echo $d['nama']; ?></td>

<td><?php echo $d['tempat_lahir']; ?></td>

<td><?php echo $d['tanggal_lahir']; ?></td>

<td><?php echo $d['nama_fakultas']; ?></td>

<td><?php echo $d['nama_jurusan']; ?></td>

<td><?php echo $d['ipk']; ?></td>

<td>

<a href="edit.php?nim=<?php echo $d['nim']; ?>">
Edit
</a>

|

<a href="delete.php?nim=<?php echo $d['nim']; ?>">
Delete
</a>

</td>

</tr>

<?php } ?>

</table>

</body>
</html>