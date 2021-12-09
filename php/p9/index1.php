<?php

    // connect kan ke database
   $db = mysqli_connect("localhost","root","","smartphone");

    // ambil data tabel objek smartphone
   $hasil = mysqli_query($db, "SELECT * FROM data_hp");

    // ambil data smartphone dari objek hasil
    // mysqli_fetch_row() mengembalikan array numeric
    // mysqli_fetch_assoc() mengembalikan array associative
    // mysqli_fetch_array() mengembalikan keduanya
    // mysqli_fetch_object()
 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>DAFTAR HARGA HP</h1>


<table border="1" cellpadding = "10" cellspacing = "0">
<tr>

    <th>no</th>
    <th>aksi</th>
    <th>merk</th>
    <th>tipe</th>
    <th>chipset</th>
    <th>harga</th>

</tr>

<?php $i = 1 ?>
<!-- // ambil data smartphone dari objek hasil -->
<?php while ( $hp = mysqli_fetch_assoc($hasil)) : ?>
<tr>

    <td><?=  $i ?></td>
    <td>
        <a href="">edit</a> ||
        <a href="">delete</a>
    </td>
    <td><?=  $hp["merk_hp"] ?></td>
    <td><?= $hp["jenis_hp"] ?></td>
    <td><?= $hp["chipset_hp"] ?></td>
    <td><?= $hp["harga_hp"] ?></td>

</tr>
<?php $i++ ?>
  <?php endwhile; ?>

</table>
</body>
</html>