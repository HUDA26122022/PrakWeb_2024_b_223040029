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
    
    public function getLabel(){
        return "$this->judul, Rp $this->harga";
    }
}

//intsansiasi

$produk1 = new produk("Naruto", "Ahmad", "Gramedia", 30000);//komik
$produk2 = new produk("Minecraft", "Mojang", "Mojang", 99000);//game
$produk3 = new produk("Gantungan Makrame", "Ahmad Mulia Huda", "AmhStore.id", 10000);

//menampilkan kelayar 
echo "Komik :" . $produk1->getLabel();
echo "<br>"; //garis baru
echo "Game :" . $produk2->getLabel();
echo "<br>";
echo "produk :" . $produk3->getLabel();
?>