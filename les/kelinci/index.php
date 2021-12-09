<?php

session_start();
require '../../php/p20/function.php';

$produk = ambilData("SELECT * FROM produk");

if( isset($_SESSION["login"]) ){

  $user = $_SESSION["nama"];

  $akun = ambilData("SELECT id FROM users WHERE username = '$user'");
  
  $userid = $akun[0]["id"];

  $profil = ambilData("SELECT profil FROM profil WHERE userid = $userid");

}






?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - LoginLess</title>

    <link rel="stylesheet" href="index.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  </head>
  <body>
    <nav>
      <div class="judul">
        <a class="logo" href="#"><img src="../img/Jam2.jpg" alt="" /></a>
        <a class="loginless" href="#">LoginLess</a>
      </div>
      <ul class="menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">Product</a></li>
        <li><a href="#">Galery</a></li>
        <li><a href="#">Service</a></li>
        <li><a href="#">About</a></li>
      </ul>
      <!-- dropdown -->

      <div class="profil">
        <div class="fotoProf"><?php if(isset($_SESSION["login"])) : ?><img src="<?= $profil[0]["profil"]; ?>" alt="" style="width: 35px;
        height: 35px;
         border-radius: 50%;
         box-sizing: border-box;"><?php endif; ?></div>
        <h3 class="namaProf"><?php if(isset($_SESSION["login"])) : echo $_SESSION["nama"]; else : ?>Login now<?php endif; ?></h3>
        <div class="dropbar"></div>
        <ul class="ulDrop">

        <?php if( isset($_SESSION["login"]) ) : ?>
          <li class="liDrop"><a class="link2 logout" href="logout.php">Logout</a></li>
          <li class="liDrop"><a class="link2 uploadFoto" href="profil.php?id=<?= $akun[0]["id"]; ?>">Profil</a></li>
        
          <?php else : ?>
          <li class="liDrop"><a class="link2 login" href="login.php">Login</a></li>
          <li class="liDrop"><a class="link2 register" href="#">Register</a></li> 
        <?php endif; ?>
        </ul>
      </div>

      <!-- End -->
      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </nav>

    <!-- BOOSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <script src="index.js"></script>
  </body>
</html>
