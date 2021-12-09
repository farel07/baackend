<?php

require 'function.php';

$data = ambilData("SELECT * FROM produk");

// jka menggunakan fitur seach
if ( isset($_POST["cari"]) ){

    $data = search($_POST["keyword"]);

}

if ( isset($_POST["refresh"]) ){
    header:'Location: index.php';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css";
</head>
<body>
<div class="container">
<h1>DATA PRODUK LOGINLESS</h1>

<div class="tambahData">
<a href="tambahData.php">Tambahkan data</a>
</div><br>


<form action="" method="post">
<ul>
<div class="search">
<li><input type="text" name="keyword" size="40"autofocus placeholder="msaukkan keyword pencarian" autocomplete="off" required value=""></li>
<li><button type="submit" name="cari">Cari Data</button></li>

</div>
</form>

<form action="" method="post">

<div class="search">

<li><button type="submit" name+="refresh">refresh</button></li>
</div>
</ul>
</form>


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

    <a class="ed"href="edit.php?id=<?= $d["id"] ?>"><img src="img/pen.png" alt=""></a>
    <a class="del"href="hapus.php?id=<?= $d["id"] ?>"onclick ="return confirm('ingin menghapus data?');"><img src="img/bin.png" alt=""></a>
   
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