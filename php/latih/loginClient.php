<?php
session_start();

require 'function.php';

if( isset($_COOKIE["id"]) && isset($_COOKIE["key"]) && isset($_COOKIE["user"]) ){

    $id = $_COOKIE["id"];
    $key = $_COOKIE["key"];
    $user = $_COOKIE["user"];
    $_SESSION["nama"] = $user;

    $hasil = mysqli_query($database, "SELECT username FROM clientusers WHERE id = $id");

    $userNama = mysqli_fetch_assoc($hasil);

    if ( $key === hash('sha256',$userNama["username"]) ){
        $_SESSION["login"] = true;
    }


}

if ( isset($_POST["login"]) ){

    $username = $_POST["username"];
    $password = $_POST["password"];
    $_SESSION["nama"] = $username;

    // cek user
    $cekuser = mysqli_query($database, "SELECT * FROM clientusers WHERE username = '$username'");

    // cek apakah username ada dalam databse
    if( mysqli_num_rows($cekuser) === 1 ){

        $data = mysqli_fetch_assoc($cekuser);


        if( password_verify($password, $data["password"]) ){

            $_SESSION["login"] = true;

            if( isset($_POST["remember"]) ){

                setcookie('id',$data['id'], time()+3600*20);
                setcookie('key', hash('sha256',$data["username"]), time()+3600*20);
                setcookie('user',$data["username"], time()+3600*20);
                

            }

            header("Location: client.php");
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
    <title>Document</title>
</head>
<body>

<h1>halaman login</h1>

<!-- tombol login nanti -->
<form action="client.php">

<button type="submit">Login nanti</button>

</form>
    
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

    <a href="registerClient.php" class="register"><p color="darkblue">buat akun sekarang</p></a>
    </div>


</form>





</form>
    
</body>
</html>