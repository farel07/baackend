<?php

    // hubungkan ke database (koneksi)
    $db = mysqli_connect("localhost", "root","", "smartphone");

  function ambilData($query){

    global $db;
    // ambil data berupa objek (database)
    $hasil = mysqli_query( $db,$query);
    $penampung = [];

    // ambil data per data dari objek (daatabase)
    while ( $perData = mysqli_fetch_assoc($hasil)){

        $penampung[] = $perData;

    }
    return $penampung;

  }

?>