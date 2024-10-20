<?php

abstract class produk{
    //property
    protected
     $judul ,
            $penulis ,
            $penerbit,
            $diskon,
            $harga;



    
    //construktor
    public function __construct( $judul= "judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0 ){ //didalam kurung adalah variabel lokal
         $this->judul = $judul;
         $this->penulis = $penulis;
         $this->penerbit = $penerbit;
         $this->harga = $harga;

    }
    
    public function setJudul($judul) {
        $this->judul = $judul;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon /100);
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getDiskon(){
        return $this->diskon;
    }



    public function getLabel(){ //method
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfo();
    
    
    
}