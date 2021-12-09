<?php

$database = mysqli_connect("localhost","root","","datasiswa");

function ambilData($query){

    global $database;

    $hasil = mysqli_query($database,$query);
    $penampung = [];

    while ( $perData = mysqli_fetch_assoc($hasil)){

        $penampung[] = $perData;
        
    }
    return $penampung;

}

?>