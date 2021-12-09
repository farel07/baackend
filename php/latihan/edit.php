<?php

require 'function.php';

$id = $_GET["id"];

$produk = ambilData("SELECT * FROM produk WHERE id = $id ")[0];


if ( isset($_POST["submit"]) ){


    if ( edit($_POST) > 0 ){
       
        echo "<script>
        alert('Data berhasil diubah')
    </script>";

    echo "
    <script>
        document.location.href = 'index.php';
    </script>
    ";
    }

    else{
        echo "<script>
        alert('Data tidak berhasil diubah')
    </script>";

    echo mysqli_error($database);

    }



}


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

<a href="index.php">kembali ke halaman utama</a>

<form action="" method="post">

<ul>
<input type="hidden" name = "id" value="<?= $produk["id"]; ?>">
        <li>
            <label for="gambar">Gambar</label>
            <input type="text" name = "gambar" id = "gambar"
            value ="<?= $produk["gambar"]; ?>">
        </li>
        <li>
            <label for="nama_produk">Nama produk</label>
            <input type="text" name = "nama_produk" id = "nama_produk"
            required value ="<?= $produk["nama_produk"]; ?>">
        </li>
        <li>
            <label for="kategori_produk">Kategori produk</label>
            <input type="text" name = "kategori_produk" id = "kategori_produk"
            required value ="<?= $produk["kategori_produk"]; ?>">
        </li>
        <li>
            <label for="tipe_produk">Tipe produk</label>
            <input type="text" name = "tipe_produk" id = "tipe_produk"
            required value ="<?= $produk["tipe_produk"]; ?>">
        </li>
        <li>
            <label for="harga">Harga</label>
            <input type="number" name = "harga" id = "harga"
            required value ="<?= $produk["harga"]; ?>">
        </li>
        <li>
            <button type = "submit" name="submit">Ubah data</button>
        </li>
    </ul>

</form>
    
</body>
</html>