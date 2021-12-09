<?php

$siswa = [];
$siswa[0] = ["farrel", "Rekayasa Perangkat Lunak", "XI"];
$siswa[1] = ["dodik", "Pedalangan", "X"];
$siswa[2] = ["sandhika", "Teknik Informatika", "Dosen"];
$siswa[3] = ["dedy", "Teknik Perlelan", "Mahasiswa"];




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

<?php for( $a = 0; $a < count($siswa); $a++) : ?>
    <ul>

    <?php for($i = 0; $i < count($siswa[$i]); $i++) : ?>
        <li><?= $siswa[$a][$i]; ?> </li>
    <?php endfor; ?>
    </ul>
  <?php endfor; ?>  
</body>
</html>