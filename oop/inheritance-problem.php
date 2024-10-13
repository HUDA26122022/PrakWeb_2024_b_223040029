<?php 


class produk{
    //property
    public $judul ,
            $penulis ,
            $penerbit,
            $harga,
            $jmlhHalaman,
            $jmlhWaktu,
            $tipe;


    
    //construktor
    public function __construct( $judul, $penulis, $penerbit, $harga, $jmlhHalaman, $jmlhWaktu, $tipe){ //didalam kurung adalah variabel lokal
         $this->judul = $judul;
         $this->penulis = $penulis;
         $this->penerbit = $penerbit;
         $this->harga = $harga;
         $this->jmlhHalaman = $jmlhHalaman;
         $this->jmlhWaktu = $jmlhWaktu;
         $this->tipe = $tipe;
    }
    
    public function getLabel(){ //method
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul}, {$this->getlabel()} (Rp. {$this->harga})";
        if ($this->tipe == "Komik"){
            $str .= " - {$this->jmlhHalaman} Halaman.";
        }else if ($this->tipe == "Game"){
            $str .= " - {$this->jmlhWaktu} jam.";
        }
        return $str;
    }
    
}


//mencetak seluruh informasi produk
class CetakInfoBuku {
    public function cetak ( Produk$produk ){
        $str = "{$produk -> judul} | {$produk-> getLabel()} (Rp. {$produk -> harga})";
        return $str;
    }

}



//intsansiasi

$produk1 = new produk("Naruto", "Ahmad", "Gramedia", 30000, 100, 0, "Komik");//komik
$produk2 = new produk("Minecraft", "Mojang", "Mojang", 99000, 0, 50, "Game");//game

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
?>