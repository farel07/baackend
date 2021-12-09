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




<<<<<<< HEAD
?>
=======

?>



>>>>>>> 943dcbb (initial commit)
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - LoginLess</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="index1.css" />
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" /> -->
    <!-- end Boostrap CSS -->
  </head>
  <body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <!-- ----------------------------------------------------------------------------------------------- -->
    
    <div class="home">
      <!-- header -->
      <div class="header">
        <h2>Hi' <?php if( isset($_SESSION["login"]) ) : echo $_SESSION["nama"];?> <a href="logout.php">LOG OUT</a></h2><?php 
        else :
          echo "customer";
        ?>
        <a href="login.php">Login Now</a>
        <?php endif; ?>
        <a href="profil.php?id=<?= $akun[0]["id"]; ?>">upload profil</a>
        <img src="<?= $profil[0]["profil"]; ?>" alt="">
      </div>
      <!-- navbar -->
      <nav>
        <div class="judul">
          <h1>LoginLess</h1>
        </div>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Product</a></li>
          <li><a href="#">Galery</a></li>
          <li><a href="#">Service</a></li>
          <li><a href="#">About</a></li>
        </ul>
        <!-- SEARCH -->
        <div class="search">
          <input type="search" placeholder="Search" autofocus />
        </div>
        <!-- END SEARCH -->
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </nav>
      <!-- end navbar -->
      <div class="mulai">
        <h3>Buy 2 Get Disc 40%</h3>
        <div class="mulaiBelanja">
          <h3>Mulai Belanja</h3>
        </div>
      </div>
    </div>
    <!-- END HOME -->


    <?php for( $a = 0; $a < 4; $a++ ) : ?>
          <div class="produk">

          <ul>

          <img src="<?= $produk[$a]["gambar"]; ?>" width="100px"alt="">
          <li><?= $produk[$a]["nama_produk"] ?></li>
          <li><?= $produk[$a]["harga"] ?></li>

    </ul>
          </div>
      <?php endfor; ?>
=======
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
>>>>>>> 943dcbb (initial commit)

    <script src="index.js"></script>
  </body>
</html>
