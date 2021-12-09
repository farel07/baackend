<?php

// jika tidak ada data di $_GET paksa user kembali ke halaman utama
if ( !isset($_GET["nama"]) || !isset($_GET["jurusan"]) || !isset($_GET["kelas"])){

    // redirect
    header("Location: latihan1.php");
    exit;

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

    <ul>
        
        <li><img src="<?= $_GET["gambar"] ?>" alt="gambar"></li>
        <li><?= $_GET["nama"] ?></li>
        <li><?= $_GET["kelas"] ?></li>
        <li><?= $_GET["jurusan"] ?></li>

    </ul>
    
</body>
</html>