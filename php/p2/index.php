<?php 

// opperator aritmatika
$a = 5 + 5;
// penggabung string
$nama_depan = "farrel";
$nama_tengah = "aqeel";
$nama_belakang = "danendra";

$nama_lengkap = $nama_depan .= $nama_tengah .= $nama_belakang;

// operator perbandingan
// <,>,<=,>=,==,!=

// operator logika
// &&(and), ||(or), !(not)

$a = 10;
echo($a <= 10 || $a % 2 == 0);


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar php</title>
</head>
<body>

<h1>halo nama saya <?php echo ($nama_lengkap);?></h1>
    
</body>
</html>