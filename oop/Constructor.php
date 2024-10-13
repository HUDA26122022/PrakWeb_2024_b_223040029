<?php 


class produk{
    //property
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;
    
    //construktor
    public function __construct( $judul, $penulis, $penerbit, $harga){ //didalam kurung adalah variabel lokal
         $this->judul = $judul;
         $this->penulis = $penulis;
         $this->penerbit = $penerbit;
         $this->harga = $harga;
    }
    
    public function getLabel(){ //method
        return "$this->judul, $this->penerbit";
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

$produk1 = new produk("Naruto", "Ahmad", "Gramedia", 30000);//komik
$produk2 = new produk("Minecraft", "Mojang", "Mojang", 99000);//game


//menampilkan kelayar 
echo "Komik :" . $produk1->getLabel();
echo "<br>"; //garis baru
echo "Game :" . $produk2->getLabel();

echo "<br>";

$infoProduk1 = new CetakInfoBuku();
echo $infoProduk1->cetak($produk1);

?>