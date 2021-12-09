<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- post  mengirim data ke halaman itu sendiri -->
<?php if( isset($_POST["tombol"])) : ?>

    <h1>halo selamat datang <?= $_POST["nama"] ?></h1>

    <?php endif; ?>

<form action="" method="post">

masukkan nama anda : 
<input type="text" name = "nama">

<button type="submit" name="tombol">kirim</button>

</form>
    
</body>
</html>