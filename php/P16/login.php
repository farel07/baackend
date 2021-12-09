<?php
session_start();

require 'function.php';
if ( isset($_SESSION["login"]) ){
    header("Location: index.php");
}

if( isset($_POST["login"]) ){

    $username = $_POST["username"];
    $password = $_POST["password"];
    
   
    $cekusername = mysqli_query($database, "SELECT * FROM users WHERE username = '$username'");

         // cek apakah username ada dalam databasxe
    if( mysqli_num_rows($cekusername) === 1 ){

        // cek apakah password benar  atau tidak
        $data = mysqli_fetch_assoc($cekusername);
        if( password_verify($password, $data["password"]) ){
            $_SESSION["login"] = true;
            header("Location: index.php");
            exit;
        }  
    }

    
        echo "<script>
        alert('USERNAME ATAU PASSWORD SALAHHHHHHH!!!!!!!')
    </script>";
    



}




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>login</title>
</head>
<body>
    <h1>halaman login</h1>
    
    <div class="login">
    <form action="" method="post" >

    <ul>

    <li class="username">
        <label for="username">username</label><br>
        <input type="text" name="username" id="username"  required value="">
    </li>
    <li class="pass">
        <label for="password">password</label><br>
        <input type="password" name="password" id="password" required value="">
    </li>
    <li>
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">remember me</label>
    </li>
    <li class="button">
        <button type="submit" name="login">Login</button>
    </li>

    </ul>

    </form>

    <a href="register.php" class="register"><p color="darkblue">buat akun sekarang</p></a>
    </div>
</body>
</html>