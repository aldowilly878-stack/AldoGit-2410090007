<?php
include 'koneksi.php';
?>

<form method="POST"
action="proses_tambah.php">

NIM:
<input type="text" name="nim">

<br><br>

Nama:
<input type="text" name="nama">

<br><br>

Tempat Lahir:
<input type="text" name="tempat_lahir">

<br><br>

Tanggal Lahir:
<input type="date" name="tanggal_lahir">

<br><br>

IPK:
<input type="text" name="ipk">

<br><br>

Jurusan:

<select name="id_jurusan">

<?php

$data = mysqli_query($koneksi,
"SELECT * FROM jurusan");

while($d = mysqli_fetch_array($data)){

?>

<option value="<?php echo $d['id_jurusan']; ?>">

<?php echo $d['nama_jurusan']; ?>

</option>

<?php } ?>

</select>

<br><br>

<button type="submit">
Tambah
</button>

</form>