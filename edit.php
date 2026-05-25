<?php

include 'koneksi.php';

$nim = $_GET['nim'];

$data = mysqli_query($koneksi,
"SELECT * FROM mahasiswa
WHERE nim='$nim'");

$d = mysqli_fetch_array($data);

?>

<form method="POST"
action="proses_edit.php">

<input type="hidden"
name="nim"
value="<?php echo $d['nim']; ?>">

Nama:
<input type="text"
name="nama"
value="<?php echo $d['nama']; ?>">

<br><br>

Tempat Lahir:
<input type="text"
name="tempat_lahir"
value="<?php echo $d['tempat_lahir']; ?>">

<br><br>

Tanggal Lahir:
<input type="date"
name="tanggal_lahir"
value="<?php echo $d['tanggal_lahir']; ?>">

<br><br>

IPK:
<input type="text"
name="ipk"
value="<?php echo $d['ipk']; ?>">

<br><br>

Jurusan:

<select name="id_jurusan">

<?php

$jurusan = mysqli_query($koneksi,
"SELECT * FROM jurusan");

while($j = mysqli_fetch_array($jurusan)){

?>

<option value="<?php echo $j['id_jurusan']; ?>">

<?php echo $j['nama_jurusan']; ?>

</option>

<?php } ?>

</select>

<br><br>

<button type="submit">
Update
</button>

</form>