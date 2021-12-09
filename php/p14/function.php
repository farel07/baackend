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
   
    $nama_produk = $data["nama_produk"];
    $kategori_produk = $data["kategori_produk"];
    $tipe_produk = $data["tipe_produk"];
    $harga = $data["harga"];
    $gambar = 'img/'.upload();
    if ( !$gambar ){
        return false;
    }

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
    $gambarLama = $data["gambarLama"];
    $nama_produk = $data["nama_produk"];
    $kategori_produk = $data["kategori_produk"];
    $tipe_produk = $data["tipe_produk"];
    $harga = $data["harga"];

    // cek apakah user mengupload gambar
    if( $_FILES["gambar"]["error"] === 4 ){
        $gambar = $gambarLama;
    }else{
        $gambar = 'img/'.upload();
    }

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

function upload(){

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpFile = $_FILES['gambar']['tmp_name'];
  

    // cek apakah tidak ada gambar yang diupload
   if( $error === 4 ){
        echo "<script>
            alert('gambar harus diisi!')
        </script>";
        return false;
}

    // cek apakah yang diupload oleh user adalah file gambar
    $eksGambarValid = ['jpg','png','jpeg'];
    $eksGambar = explode('.',$namaFile);
    $eksGambar = strtolower(end($eksGambar));

    // jika yang diupload bukan gambar
    if ( !in_array($eksGambar, $eksGambarValid) ){

        echo "<script>
        alert('yang anda upload bukan gambar!')
    </script>";
    return false;

    }

    // jika ukuran gambar terlalu besar
    else if( $ukuranFile > 2500000 ){
        echo "<script>
        alert('gambar yang anda upload ukuran nya terlalu besar!')
    </script>";
    return false;
    }

    // ubah nama file
    $namaBaru = uniqid();
    $namaBaru.='.';
    $namaBaru.=$eksGambar;

    // ketika lolos seleksi
    move_uploaded_file($tmpFile,'img/'.$namaBaru);
    return $namaBaru;

}

// function for register
function register($data){

    global $database;   
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($database,$data["password"]);
    $password2 = mysqli_real_escape_string($database,$data["password2"]);

    // cek apakaah ada username yang sama
    $result = mysqli_query($database, "SELECT username FROM users WHERE username = '$username'");

    if ( mysqli_fetch_assoc($result) ){
        echo "username yang anda ketikkan telah terdaftar!";
        return false;
    }

    // cek apakah password dan konfirmasi sama atau tidak

    if( $password !== $password2 ){

        echo "salah blok";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    // masukkan data ke database
    mysqli_query($database,"INSERT INTO users VALUES('','$username','$password')
    ");

    return mysqli_affected_rows($database);

}


?>