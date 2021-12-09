<?php 

for( $i = 0; $i < 5; $i++){
    echo "halo dunia <br>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
    <style>

    .warna-tabel-genap {background-color : lightblue}
    .warna-tabel-ganjil {background-color: darkorange}

    </style>
</head>
<body>

<table border="1" cellpadding = "10" cellspacing = "0">

<!-- membuat  table menggunakan looping -->

<h1>membuat table menggunakan for loop</h1>
<?php 

for($i = 1; $i <= 3;$i++){

    echo "<tr>";
    for( $j = 1; $j <= 5; $j++){
        echo "<td>$i,$j</td>";
    }
    echo "</tr>";
}

?>  
</table>
<br>
<table border="1" cellpadding = "10" cellspacing = "0">
<h1>membuat table menggunakan while loop</h1>
<?php $i = 1; while($i <= 5) :  ?>
   
   <?php if($i % 2 == 0) :  ?>
    <tr class = "warna-tabel-genap">

    <?php else : ?>
        <tr class = "warna-tabel-ganjil">

        <?php endif; ?>

    <?php $j = 1; while($j <= 5) :  ?>
    <td><?= "$i,$j" ?></td>
    <?php $j++; endwhile; ?>
    
    </tr>
<?php $i++; endwhile; ?>
        

</table>
    
</body>
</html>