<?php
session_start();

if ( !isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}
require 'function.php';

if ( isset($_POST["submit"]) ){



    if ( tambahData($_POST) > 0 ){
       
        echo "<script>
        alert('Data berhasil ditambahkan')
    </script>";
    }

    else{
        echo "<script>
        alert('Data tidak ditambahkan')
    </script>";
    echo mysqli_error($database);
    }

    echo "
    <script>
        document.location.href = 'index.php';
    </script>
    ";

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
    <a href="index.php">Kembali ke halaman utama</a>
<form action="" method="post"enctype="multipart/form-data">

    <ul>
        <li>
            <label for="gambar">Gambar</label>
            <input type="file" name = "gambar" id = "gambar">
        </li>
        <li>
            <label for="nama_produk">Nama produk</label>
            <input type="text" name = "nama_produk" id = "nama_produk">
        </li>
        <li>
            <label for="kategori_produk">Kategori produk</label>
            <input type="text" name = "kategori_produk" id = "kategori_produk">
        </li>
        <li>
            <label for="tipe_produk">Tipe produk</label>
            <input type="text" name = "tipe_produk" id = "tipe_produk">
        </li>
        <li>
            <label for="harga">Harga</label>
            <input type="number" name = "harga" id = "harga">
        </li>
        <li>
            <button type = "submit" name="submit">Tamabah  data</button>
        </li>
    </ul>


</form>


</body>
</html>