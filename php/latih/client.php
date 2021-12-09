<?php
session_start();

require 'function.php';

// if( !isset($_SESSION["login"]) ){
//     header('Location: loginClient.php');
// }

$data = ambilData("SELECT * FROM produk");

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


    <?php if ( isset($_SESSION["login"]) ) : echo$_SESSION["nama"]; ?>
<form action="logoutClient.php">
    <button type="submit">LogOut</button>
</form>
<?php endif; ?>


<?php if ( !isset($_SESSION["login"])) : ?>
    <form action="loginClient.php">
    <button type="submit">Login sekarang</button>
</form>
<?php endif; ?>
    
<table border="10px"cellpadding = "10" cellspacing = "0">

<tr>

    <th>No</th>
    <th>Gambar</th>
    <th>Nama Produk</th>
  
    <th>Harga Produk</th>
    <th>Detail Produk</th>

</tr>

<?php $i = 1; ?>
<?php foreach( $data as $d ) : ?>

 <div class="data">
    <tr>
    
    <td><?= $i ?></td>
    <td><img src="<?= $d["gambar"] ?>" alt=""id="img" width="120px" height ="120px"> </td>
    <td><?= $d["nama_produk"] ?></td>
    
    <td><?= $d["harga"] ?></td>
    <td><a href="detail.php?id=<?= $d["id"] ?>">Lihat detail</a></td>
    <?php $i++ ?>

    </tr>
</div>
<?php endforeach ?>

</table>
    
</body>
</html>