<?php
include 'koneksi.php';

$query = mysqli_query($con, "SELECT * FROM dosen");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Dosen</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 30px;
        }

        h2{
            text-align: center;
            color: #333;
        }

        table{
            width: 70%;
            margin: auto;
            border-collapse: collapse;
            background-color: white;
        }

        th{
            background-color: #56ce8e;
            color: white;
            padding: 10px;
        }

        td{
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        tr:nth-child(even){
            background-color: #f9f9f9;
        }

        tr:hover{
            background-color: #f1f1f1;
        }
    </style>

</head>
<body>

    <h2>Data Dosen</h2>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Dosen</th>
            <th>Mata Kuliah</th>
        </tr>

        <?php
        $no = 1;
        while($data = mysqli_fetch_array($query)) {
        ?>

        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['nm_dosen'] ?></td>
            <td><?= $data['mata_kuliah'] ?></td>
        </tr>

        <?php } ?>

    </table>

</body>
</html>