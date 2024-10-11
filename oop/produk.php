<?php 

//jualan produk
//komik
//Game

class produk{
// komik
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;


    // public function sayHello(){
    //     return "Hello World!";
    // }

    public function getLabel(){
        return "$this->judul, Rp $this->harga";
    }
}

// $produk1 = new produk();

// //meninpa judul yang sudah ada (menimpa yang sudah ada)
// $produk1->judul = "Naruto";

// var_dump($produk1)



// // cara pemanggilan suatu prorperti
// echo "Komik : $produk3->judul , penulis : $produk3->penulis";

// //pemanggilan object Hello World
// echo "<br>";
// echo $produk3 -> getLabel();

//komik
$produk3 = new produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Ahmad";
$produk3->penerbit = "GM";
$produk3->harga = 3000;

//game
$produk4 = new produk();
$produk4->judul = "Minecraft";
$produk4->penulis = "Mojang";
$produk4->penerbit = "Mojang";
$produk4->harga = 99000;

//menampilkan kelayar 
echo "Komik :" . $produk3->getLabel();
echo "<br>"; //garis baru
echo "Game :" . $produk4->getLabel();
?>