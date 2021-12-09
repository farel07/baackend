<?php 
    // date, untuk menampilkan tanggal dengan format tertentu
    // echo date("l "."d "."M "."Y" s);

    // time
    // echo time();\

    // menghitung waktu bebrapa hari kedepan
    echo "sekarang hari ". date("l")." dua hari kedepan hari ".date("l", time()+60*60*24);
    echo "<br>";
    // mengetahui hari apa saya lahir
    echo date("l",mktime(0,0,0,7,7,2005));

    
?>