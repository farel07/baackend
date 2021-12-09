<?php

    // hubungkan ke database (koneksi)
    $db = mysqli_connect("localhost", "root","", "smartphone");

  function ambilData($query){

    global $db;
    // ambil data berupa objek (database)
    $hasil = mysqli_query( $db,$query);
    $penampung = [];

    while ( $perData = mysqli_fetch_assoc($hasil)){

        $penampung[] = $perData;

    }
    return $penampung;

  }



  // fungsi menambah data
  function tambahData($data){
    global $db;
    // cek apakah tombol sudah dipenecet

  // ambil data per data dari form
  $merk_hp = $data["merk_hp"];
  $jenis_hp = $data["jenis_hp"];
  $chipset_hp = $data["chipset_hp"];
  $harga_hp = $data["harga_hp"];

  // query insert data(masukkan dat ke dalam databse)
  $query = "INSERT INTO data_hp 
              VALUES
              ('', '$merk_hp','$jenis_hp','$chipset_hp','$harga_hp')";

  $kirimData = mysqli_query($db,$query);
  $feedback = mysqli_affected_rows($db);


return $feedback;


  }


  function hapus($id){

    global $db;
    mysqli_query($db, "DELETE FROM data_hp WHERE id = $id ");

    return mysqli_affected_rows($db);

  }

  function ubahData($data){
    global $db;
    // cek apakah tombol sudah dipenecet
     $id = $data["id"]; 
  // ambil data per data dari form
  $merk_hp = $data["merk_hp"];
  $jenis_hp = $data["jenis_hp"];
  $chipset_hp = $data["chipset_hp"];
  $harga_hp = $data["harga_hp"];

  // query insert data(masukkan dat ke dalam databse)
  $query = "UPDATE data_hp SET
          merk_hp = '$merk_hp',
          jenis_hp = '$jenis_hp',
          chipset_hp = '$chipset_hp',
          harga_hp = $harga_hp

          WHERE id = $id;
  ";

  $kirimData = mysqli_query($db,$query);
  $feedback = mysqli_affected_rows($db);


return $feedback;


  }

?>