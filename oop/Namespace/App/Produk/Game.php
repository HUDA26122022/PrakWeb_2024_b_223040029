<?php 
class Game extends produk implements InfoProduk {
    public $waktuMain;
    
        public function __construct(
            $judul= "judul", 
                $penulis = "Penulis", 
                    $penerbit = "Penerbit", 
                        $harga = 0, 
                            $waktuMain= 0){
            parent::__construct( 
                $judul, 
                    $penulis, 
                        $penerbit, 
                            $harga);

            $this->waktuMain = $waktuMain;
        }

    public function setDiskon($diskon){//mengatur nilai
        $this->diskon = $diskon;
    }

    public function getInfo(){
        $str = "{$this->getlabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoLengkap(){
        $str = "Game ".$this->getJudul(). $this->getInfo()." - {$this->waktuMain} Jam.";
        return $str;
    }
    
}