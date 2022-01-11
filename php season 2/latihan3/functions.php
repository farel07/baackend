<?php

// fungsi koneksi
function connect(){
    return mysqli_connect('localhost','root','','dat_sog');
}

// fungsi ambil data
function ambilData($query){

    $db = connect();
    // ambil semua data
    $result = mysqli_query($db,$query);
    // ubah data ke dallam array
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;

}

function insertData($data){
    
    $db = connect();

    $img = $data["img"];
    $nama = $data["nama"];
    $alamat = $data["alamat"];
    $no_hp = $data["no_hp"];
    $rt = $data["rt"];
    $kota = $data["kota"];

    $query = "INSERT INTO sog_detail VALUES (NULL, '$img', '$nama', '$alamat', '$no_hp', '$rt', '$kota')";

    // query data
    mysqli_query($db, $query);

    $feedback = mysqli_affected_rows($db);

    return $feedback;

}

function updateData($data,$id){

    $db = connect();

    $img = $data["img"];
    $nama = $data["nama"];
    $alamat = $data["alamat"];
    $no_hp = $data["no_hp"];
    $rt = $data["rt"];
    $kota = $data["kota"];

    $query = "UPDATE sog_detail SET 
            
            img = '$img',
            nama = '$nama',
            alamat = '$alamat',
            no_hp = '$no_hp',
            rt = '$rt',
            kota = '$kota'

        WHERE id = $id
        ";

    mysqli_query($db,$query);
    return mysqli_affected_rows($db);


}

function deleteData($id){

    $db = connect();
    $query = "DELETE FROM sog_detail WHERE id = $id";
    mysqli_query($db,$query);
    return mysqli_affected_rows($db);

}


?>