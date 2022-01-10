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


?>