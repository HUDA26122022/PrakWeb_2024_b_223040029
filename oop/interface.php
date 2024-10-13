<?php 

interface InfoProduk{
    public function getInfoLengkap();
}

abstract class produk{
    //property
    protected $judul ,
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

//kelas chaild
//komik
class komik extends produk implements InfoProduk{
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
    
    public function getInfo(){
        $str = "{$this->getlabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoLengkap(){
        $str = "Komik : {$this->getJudul()} {$this->getInfo()} - {$this->jmlhHalaman} Halaman."; // this adalah instansiasi yang bersangkutan
        return $str;
    }
    
}

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



//mencetak seluruh informasi produk
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


//intsansiasi
$produk1 = new komik("Naruto", "Ahmad", "Gramedia", 30000, 200,);//komik
$produk2 = new Game("Minecraft", "Mojang", "Kotak", 99000, 50);//game

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

?>