<?php 



require_once 'App/Init.php';



$produk1 = new komik("Naruto", "Ahmad", "Gramedia", 30000, 200,);//komik
$produk2 = new Game("Minecraft", "Mojang", "Kotak", 99000, 50);//game

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
