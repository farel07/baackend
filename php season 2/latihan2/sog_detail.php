<?php

    require 'functions.php';
    $id = $_GET["id"];

    $sog_detail = ambilData("SELECT * FROM sog_detail WHERE id = $id");

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

    <table border="1" cellspacing="0" cellpadding="10px">

        <tr>
            <th>no</th>
            <th>img</th>
            <th>nama</th>
            <th>alamat</th>
            <th>no_hp</th>
            <th>rt</th>
            <th>kota</th>
        </tr>

        <?php $i = 1; ?>
    <?php foreach($sog_detail as $sg) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><img src="<?= $sg["img"] ?>"width="60px"></td>
            <td><?= $sg["nama"] ?></td>
            <td><?= $sg["alamat"] ?></td>
            <td><?= $sg["no_hp"] ?></td>
            <td><?= $sg["rt"] ?></td>
            <td><?= $sg["kota"] ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
    
</body>
</html>