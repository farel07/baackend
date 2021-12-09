<?php

// hubungkan ke database
$database = mysqli_connect("localhost","root","","loginless");


// ambil data  dari database
function ambilData($data){

    global $database;
    $hasil = mysqli_query($database,$data);
    $penammpung = [];

    while ( $perData = mysqli_fetch_assoc($hasil) ){

        $penammpung[] = $perData;

    }
     return $penammpung;

}

// fungsi menambah data
function tambahData($data){
    global $database;

    // tambah data 
    $gambar = $data["gambar"];
    $nama_produk = $data["nama_produk"];
    $kategori_produk = $data["kategori_produk"];
    $tipe_produk = $data["tipe_produk"];
    $harga = $data["harga"];

    // query data
    mysqli_query($database, "INSERT INTO produk VALUES
    ('', '$gambar', '$nama_produk','$kategori_produk','$harga','$tipe_produk')
    ");

    $feedback = mysqli_affected_rows($database);

    return $feedback;


}

function hapus($id){

    global $database;
    mysqli_query($database,"DELETE FROM produk WHERE id = $id");
    return mysqli_affected_rows($database);

}

function edit($data){

    global $database;

    $id = $data["id"];

    $gambar = $data["gambar"];
    $nama_produk = $data["nama_produk"];
    $kategori_produk = $data["kategori_produk"];
    $tipe_produk = $data["tipe_produk"];
    $harga = $data["harga"];

    $query = "UPDATE produk SET
        gambar = '$gambar',
        nama_produk = '$nama_produk',
        kategori_produk = '$kategori_produk',
        tipe_produk = '$tipe_produk',
        harga = '$harga'

        WHERE id = $id
        ";

        $send = mysqli_query($database,$query);
        $feedback = mysqli_affected_rows($database);

        return $feedback;

}

function search($keyword){

    $query = "SELECT * FROM produk WHERE nama_produk LIKE '%$keyword%' 
    OR kategori_produk LIKE '%$keyword%' OR tipe_produk LIKE '%$keyword%' 
    OR harga LIKE '%$keyword%' ";

    return ambilData($query);

}


?>