<?php 


class produk{
    //property
    private $judul ,
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

    public function getInfoLengkap(){
        $str = "{$this->getlabel()} (Rp. {$this->harga})";
        return $str;
    }
    
}

//kelas chaild
//komik
class komik extends produk {
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
    
    public function getInfoLengkap(){
        $str = "Komik : ".parent::getJudul(). parent::getInfoLengkap()." - {$this->jmlhHalaman} Halaman."; // this adalah instansiasi yang bersangkutan
        return $str;
    }
    
}

class Game extends produk {
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

    public function getInfoLengkap(){
        $str = "Game ".parent::getJudul(). parent::getInfoLengkap()." - {$this->waktuMain} Jam.";
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
$produk1 = new komik("Naruto", "Ahmad", "Gramedia", 30000, 200,);//komik
$produk2 = new Game("Minecraft", "Mojang", "Kotak", 99000, 50);//game

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
echo "<hr>";

$produk2->setJudul("Ahmad mulia huda");
echo $produk2->getJudul();
echo "<hr>";

$produk1->setDiskon(50);
echo $produk1->getHarga();
?>