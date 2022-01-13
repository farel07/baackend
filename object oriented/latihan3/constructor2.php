<?php

class Sapa{

    public $nama = "nama kamu";

    public function __construct($nama){
        $this->nama = $nama;
    }

    public function nama(){
        return $this->nama;
    }

}

if(isset($_POST["kirim"])){

    $a = new Sapa($_POST["nama"]);
    $nama = $a->nama();
    header("Location: https://api.whatsapp.com/send?phone=&text=Halo%20aku%20*$nama*,%20aku%20mau%20ngomong%20kalok%20kamu%20itu%20kayak%20babi%20🖕🏿😅");
    exit;
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

    <label for="nama">Nama Kamu</label>
    <input type="text" name ="nama" >
    <button type="submit" name="kirim">Kirim</button>

</form>
    
</body>
</html>