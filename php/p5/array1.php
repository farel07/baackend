<?php

$nama = [1,2,3,4,5,6,7,8,9,10];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    .kotak{
        height : 50px;
        width : 50px;
        background-color: aqua;
        text-align: center;
        margin: 10px;
        line-height: 50px;
        float: left;
    }
    .kotak2{
        height : 50px;
        width : 50px;
        background-color: salmon;
        text-align: center;
        margin: 10px;
        line-height: 50px;
        float: left;
    }

    .clear{
        clear : both;
    }

    </style>
</head>
<body>

<h2>looping kotak array menggunakan for loop</h2>
<!-- looping for kotak div -->
<?php for($i = 0; $i < count($nama); $i++) : ?> 
<div class = "kotak"><?php echo $nama[$i]; ?></div>
    <?php endfor; ?>

    <div class = "clear"></div>


    <h2>looping kotak array menggunakan foreach</h2>
<!-- looping foreach kotak div -->
<?php foreach($nama as $n) : ?>
    <div class = "kotak2"><?= $n; ?></div>
<?php endforeach; ?>
</body>
</html>