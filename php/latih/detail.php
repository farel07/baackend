<?php
session_start();
require 'function.php';
if( !isset($_SESSION["login"]) ){
    echo "<script>
        alert('anda harus login dulu')
    </script>";

    echo "<script>
        document.location.href = 'client.php';
    </script>";
}


$id = $_GET["id"];

$produk = ambilData("SELECT * FROM produk WHERE id = $id")[0];  



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

<ul>


<li><img src="<?= $produk["gambar"]; ?>" width="100px" alt=""></li>


</ul>
    
</body>
</html>