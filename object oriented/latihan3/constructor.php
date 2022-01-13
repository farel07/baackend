<?php

class Coba{

    public $merk = "merk",  
           $tipe = "tipe",  
           $harga = 0,
           $processor = "-",
           $kamera = "-",
           $layar = "-";  

    public function __construct($merk, $tipe, $harga, $processor, $kamera, $layar){
            
        $this->merk = $merk;
        $this->tipe = $tipe;
        $this->harga = $harga;
        $this->processor = $processor;
        $this->kamera = $kamera;
        $this->layar = $layar;

    }

    public function label(){

        return $this -> merk." | ".$this -> tipe." | ".$this -> harga;
    }


}

class cetakLabel{
    
    public function label(Coba $obj){
        return "{$obj->label()} | {$obj->processor} | {$obj->kamera} | {$obj->layar} ";}
}


$a = new Coba("samsul","A02S",2499000,"MTK mt1012","48mpx, Dual Camera","amoled");
echo "Smartphone : ".$a -> label() ."<br>";
$al = new cetakLabel();
echo $al->label($a);
