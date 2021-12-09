<?php
require 'function.php';

if( isset($_POST["registrasi"]) ){

    if( registerClient($_POST) > 0 ){

        echo "<script>
            alert('berhasil registrasi!')
        </script>";
        echo "<script>
            document.location.href = 'loginClient.php';
        </script>";

        

    }

    else{
        mysqli_error($database);
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
<h1>halaman registrasi</h1>
    <a href="loginClient.php">login sekarang!</a>

    <form action="" method="post">

    <ul>

    <li>
        <label for="username">username</label>
        <input type="text" name="username" id="username">
    </li>
    <li>
        <label for="password">password</label>
        <input type="password" name="password" id="password">
    </li>
    <li>
        <label for="password2">konfirmasi passord</label>
        <input type="password" name="password2" id="password2">
    </li>
    <li>
        <button type="submit" name="registrasi">registrasi</button>
    </li>

    </ul>

    </form>
</body>
</html>