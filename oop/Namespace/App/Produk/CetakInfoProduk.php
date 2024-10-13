<?php 
class CetakInfoProduk {

    public $daftarProduk = array();

    public function tambahProduk(produk $produk){
        $this->daftarProduk[] = $produk;
    }

    public function cetak (){
        $str = "Daftar Produk : <br>";
       

        foreach($this->daftarProduk as $p){
            $str .= " - {$p->getInfoLengkap()} <br>";
        } 
        return $str;
    }

}