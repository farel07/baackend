<?php

$siswa = [];
$siswa[0] = ["nama" => "farrel", "jurusan" => "Rekayasa Perangkat Lunak", "kelas" =>"XI", "gambar" => "saya.jpg"];
$siswa[1] = ["nama" => "budi", "jurusan" => "teknik kebrsihan", "kelas" =>"XI", "gambar" => "saya.jpg"];
$siswa[2] = ["nama" => "dodik", "jurusan" => "teknikpedalangan", "kelas" =>"XI", "gambar" => "dokter.jpg"];
$siswa[3] = ["nama" => "dady", "jurusan" => "teknik komputer dan jaringan", "kelas" =>"XI", "gambar" => "saya.jpg"];

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

<?php foreach($siswa as $s) : ?>

    <ul>
    <li><img src="<?= $s["gambar"]?>"width = "300px" alt="" ></li>
    <li>nama : <?= $s["nama"]; ?> </li>
    <li>jurusan : <?= $s["jurusan"]; ?> </li>
    <li>kelas : <?= $s["kelas"]; ?> </li>

    </ul>
<?php endforeach; ?>
</body>
</html>