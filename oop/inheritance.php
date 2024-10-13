<?php 


class produk{
    //property
    public $judul ,
            $penulis ,
            $penerbit,
            $harga,
            $jmlhHalaman, // untuk game
            $jmlhWaktu; //untuk komik


    
    //construktor
    public function __construct( $judul, $penulis, $penerbit, $harga, $jmlhHalaman, $jmlhWaktu, ){ //didalam kurung adalah variabel lokal
         $this->judul = $judul;
         $this->penulis = $penulis;
         $this->penerbit = $penerbit;
         $this->harga = $harga;
         $this->jmlhHalaman = $jmlhHalaman;
         $this->jmlhWaktu = $jmlhWaktu;
    }
    
    public function getLabel(){ //method
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";
    }
    
}


//mencetak seluruh informasi produk
class CetakInfoBuku {
    public function cetak ( Produk$produk ){
        $str = "{$produk -> judul} | {$produk-> getLabel()} (Rp. {$produk -> harga})";
        return $str;
    }

}

//komik
class komik extends produk {
    public function getInfoLengkap(){
        $str = "Komik : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) - {$this->jmlhHalaman} Halaman.";
        return $str;
    }
    
}

class Game extends produk {
    public function getInfoLengkap(){
        $str = "Komik : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) - {$this->jmlhWaktu} Jam.";
        return $str;
    }
    
}

//intsansiasi

$produk1 = new komik("Naruto", "Ahmad", "Gramedia", 30000, 100, 0);//komik
$produk2 = new Game("Minecraft", "Mojang", "Mojang", 99000, 0, 50);//game

echo $komik->getInfoLengkap();
echo "<br>";
echo $Game->getInfoLengkap();
?>