<?php 
class komik extends produk implements InfoProduk{
    public $jmlhHalaman;

    
    public function __construct(
        $judul= "judul", 
        $penulis = "Penulis", 
        $penerbit = "Penerbit", 
        $harga = 0, 
        $jmlhHalaman = 0){
       
    parent::__construct( 
        $judul, 
        $penulis, 
        $penerbit, 
        $harga);
             
    $this->jmlhHalaman = $jmlhHalaman;
    }
    
    public function getInfo(){
        $str = "{$this->getlabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoLengkap(){
        $str = "Komik : {$this->getJudul()} {$this->getInfo()} - {$this->jmlhHalaman} Halaman."; // this adalah instansiasi yang bersangkutan
        return $str;
    }
    
}