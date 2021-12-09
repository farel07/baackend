<?php

$hp = [

["merk" => "samsul", "tipe" => "j2 Prime", "harga" => 1500 * 1000],
["merk" => "xomek", "tipe" => "mi note 9 prime plus", "harga" => 4500 * 1000],
["merk" => "opoao", "tipe" => "b32", "harga" => 2000 * 1000],
["merk" => "vovi", "tipe" => "v2021", "harga" => 3200 * 1000],
["merk" => "avdan", "tipe" => "g90", "harga" => 8900 * 1000]

];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
body{
    background-color: orange;
}

.kotak{
font-family: arial;
background-color: gold;
width: 150px;
height: 150px;
border-radius:50%;
border:10px solid black;
padding-top: 50px;
float: left;
margin-left:75px;
}

</style>
<body>
    
<?php foreach($hp as $data) : ?>

    <div class="kotak">
    <ul>

        <li><?= $data["merk"]; ?></li>
        <li><?= $data["tipe"]; ?></li>
        <li><?= $data["harga"]; ?></li>

    </ul>
    </div>
<?php endforeach; ?>    

</body>
</html>