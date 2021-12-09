<?php

// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["tombol"])) {

// cek username dan password
if ( $_POST["username"] == "farrel" && $_POST["password"] == "123"){

// jika username dan pass benar (gunakan tag header untuk pindah paksa)
    
    header("Location: adminPage.php?username=");
    exit;
}

// jika salah tampilkan pesan kesalahan

else{

    $eror = true;   

}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body>

    <h1>Login Page</h1>

    <?php if ( isset($eror)) : ?>

        <p style = "color : red;"> username / password salah!</p>

        <?php endif ?>
    <ul>

    <form action="" method = "post">

        <li>
            <label for="username">masukkan username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">masukkan password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <button type ="submit" name = "tombol">Login!</button>
        </li>

        

    </form>

    </ul>
    
</body>
</html>