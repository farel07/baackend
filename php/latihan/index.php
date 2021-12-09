<?php

require 'function.php';

$data = ambilData("SELECT * FROM produk");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style2.css";
</head>
<body>
<div class="container">
<h1>DATA PRODUK LOGINLESS</h1>

<div class="tambahData">
<a href="tambahData.php">Tambahkan data</a>
</div>
<table border="10px"cellpadding = "10" cellspacing = "0">

<tr>

    <th>No</th>
    <th>Action</th>
    <th>Gambar</th>
    <th>Nama Produk</th>
    <th>Kategori Produk</th>
    <th>Tipe Produk</th>
    <th>Harga Produk</th>

</tr>

<?php $i = 1; ?>
<?php foreach( $data as $d ) : ?>

 <div class="data">
    <tr>
    
    <td><?= $i ?></td>
    <td class="action">

    <button><a href="edit.php?id=<?= $d["id"] ?>">Edit</a></button>
    <button><a href="hapus.php?id=<?= $d["id"] ?>"onclick ="return confirm('ingin menghapus data?');">Delete</a></button>
   
    </td>
    <td><img src="<?= $d["gambar"] ?>" alt=""id="img" width="120px" height ="120px"> </td>
    <td><?= $d["nama_produk"] ?></td>
    <td><?= $d["kategori_produk"] ?></td>
    <td><?= $d["tipe_produk"] ?></td>
    <td><?= $d["harga"] ?></td>
    <?php $i++ ?>

    </tr>
</div>
<?php endforeach ?>

</table>
</div>      
    
</body>
</html>