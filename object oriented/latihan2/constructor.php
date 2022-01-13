<?php

class Coba{

    public $merk = "merk",
           $tipe = "tipe",
           $harga = 0;

    public function __construct($merk, $tipe, $harga){

        $this->merk = $merk;
        $this->tipe = $tipe;
        $this->harga = $harga;

    }

    public function Detail(){

        return $this -> merk." ".$this -> tipe." ".$this -> harga;
    }


} 

$a = new Coba("samsul","A02S",2499000);
echo "Smartphone : ".$a -> Detail();

