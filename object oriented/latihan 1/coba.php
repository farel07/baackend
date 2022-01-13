<?php

class Coba{

    public $merk = "merk",
           $tipe = "tipe",
           $harga = 0;

    public function Detail(){

        return $this -> merk." ".$this -> tipe." ".$this -> harga;
    }


} 

$a = new Coba();
$a -> merk = "samsul";
$a -> tipe = "A02S";
$a -> harga = 1499000;
echo "Smartphone : ".$a -> Detail();

