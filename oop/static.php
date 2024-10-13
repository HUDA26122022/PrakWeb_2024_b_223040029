<?php 

// class ContohStatic{
//     public static $angka = 1;
     
//     public static function halo(){
//         return "Hallo.". self::$angka; // self digunakan untuk mengambil nilai yang ada di angkat
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";


class Contoh{
    public $angka = 1;

    public function hallo(){
        return "Hello ". $this->angka++ . "Terimakasih <br>"; 
    }

}

$obj = new Contoh;
echo $obj->hallo();
echo $obj->hallo();
echo $obj->hallo();
echo $obj->hallo();
