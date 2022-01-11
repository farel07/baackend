<?php

require 'functions.php';

$id = $_GET["id"];

if(isset($_POST["send"])){

    if(updateData($_POST,$id) > 0){

        echo "<script>
    alert('Data berhasil diupdate')
</script>";
        
        echo "<script>
    document.location.href = 'sog_detail.php?id=$id';
</script>";

        }


    else{
    
         echo "<script>
    alert('Data tidak diupdate')
</script>";

echo mysqli_error(connect());
}

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

<a href="sog_detail.php?id=<?= $id; ?>">kembali</a>

<form action="" method="post">

<label for="img">img</label>
<input type="text" name="img">

<br>

<label for="nama">nama</label>
<input type="text" name="nama">

<br>

<label for="alamat">alamat</label>
<input type="text" name="alamat">

<br>

<label for="no_hp">no_hp</label>
<input type="text" name="no_hp">

<br>

<label for="rt">rt</label>
<input type="text" name="rt">

<br>

<label for="kota">kota</label>
<input type="text" name="kota">

<br>

<button type="submit" name="send">Update Data</button>

</form>
    
</body>
</html>
