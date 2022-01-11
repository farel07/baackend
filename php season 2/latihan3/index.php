<?php

require 'functions.php';

$sog_detail = ambilData("SELECT * FROM sog_detail");


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

<a href="sog_tambah_data.php">Tambahkan data</a>

<table border="1" cellspacing="0" cellpadding="10px" >

    <tr>
        <th>#</th>
        <th>img</th>
        <th>Nama</th>
        <th>No Hp/Telepon</th>
        <th>Action</th>
    </tr>

    <?php foreach($sog_detail as $sg) : ?>
    <tr>
        <td>1</td>
        <td><img src="<?= $sg["img"] ?>" width="60px"></td>
        <td><?= $sg["nama"] ?></td>
        <td><?= $sg["no_hp"] ?></td>
        <td>
            <a href="sog_detail.php?id=<?= $sg["id"] ?>">detail</a>
        </td>
    </tr>
    <?php endforeach; ?>


</table>
    
</body>
</html>