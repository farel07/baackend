<?php

    // hubungkan ke function
    require 'functions.php';

   $handphone = ambilData("SELECT * FROM data_hp");
 
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
<br>

<button><a href="tambahData.php">Tambahkan data smartphone</a>
</button>
<br><br>

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
<?php foreach( $handphone as $hp ) : ?>
<tr>

    <td><?=  $i ?></td>
    <td>
        <a href="edit.php?id=<?= $hp["id"] ?>">edit</a> ||
        <a href="hapus.php?id=<?= $hp["id"] ?>" onclick ="return confirm('ingin menghapus data?');">delete</a>
    </td>
    <td><?=  $hp["merk_hp"] ?></td>
    <td><?= $hp["jenis_hp"] ?></td>
    <td><?= $hp["chipset_hp"] ?></td>
    <td><?= $hp["harga_hp"] ?></td>

</tr>
<?php $i++ ?>
  <?php endforeach; ?>

</table>
</body>
</html>