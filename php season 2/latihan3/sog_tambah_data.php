<?php

    require 'functions.php';

if(isset($_POST["send"])){
   
    if (insertData($_POST) > 0 ){
    
        echo "<script>
    alert('Data berhasil ditambahkan')
</script>";
        
        echo "<script>
    document.location.href = 'index.php';
</script>";

        
}
    else{
    
        echo "<script>
    alert('Data tidak ditambahkan')
</script>";

echo mysqli_error($database);
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

        <button type="submit" name="send">Tambahkan Data</button>

    </form>
    
</body>
</html>