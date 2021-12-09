<?php
// konksi ke database
require 'functions.php';

if ( isset($_POST["submit"]) ){


    if ( tambahData($_POST) > 0 ){
       
        echo "<script>
        alert('Data berhasil ditambahkan')
    </script>";
    }

    else{
        echo "<script>
        alert('Data berhasil ditambahkan')
    </script>";

    }

    echo "
    <script>
        document.location.href = 'index2.php';
    </script>
    ";

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel = "stylesheet" href = "css.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data siswa</title>
</head>
<body>
<div class="header">
<h1>TAMBAH DATA SMARTPHONE</h1>
</div>
<br> 
<div class="home">
<button><a href="index2.php"><p>KE MENU UTAMA</p></a>
</div>
<form action="" method = "post">

<div class="kotak">
<ul>

    <li>
        <label for="merk_hp">MERK HP : </label><br>
        <input type="text" name = "merk_hp" id = "merk_hp">
    </li>
    <li>
        <label for="jenis_hp">JENIS HP :</label><br>
        <input type="text" name = "jenis_hp" id = "jenis_hp">
    </li>
    <li>
        <label for="chipset_hp">CHIPSET HP : </label><br>
        <input type="text" name = "chipset_hp" id = "chipset_hp">
    </li>
    <li>
        <label for="harga_hp">HARGA HP : </label><br>
        <input type="number" name = "harga_hp" id = "harga_hp">
    </li>
    <li>
        <button type = "submit" name="submit">KIRIM DATA</button>
    </li>

</ul>
</div>
</form>
    
</body>
</html>