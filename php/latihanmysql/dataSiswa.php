<?php

require 'functions.php';

$dataSiswa = ambilData("SELECT * FROM kelas_1");

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

<table border = "1" cellpadding = "10" cellspacing = "0">

<tr>

    <th>no</th>
    <th>nama</th>
    <th>nis</th>
    <th>no telpon</th>
    <th>alamat</th>

</tr>

<?php $i = 1; foreach ( $dataSiswa as $ds ) : ?>
<tr>
    <td><?= $i ?></td>
    <td><?= $ds["nama"] ?></td>
    <td><?= $ds["nis"] ?></td>
    <td><?= $ds["no_telpon"] ?></td>
    <td><?= $ds["alamat"] ?></td>

</tr>
<?php $i++; endforeach; ?>



</table>
    
</body>
</html>