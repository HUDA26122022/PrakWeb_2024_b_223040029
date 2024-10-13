<?php 

//Penggunaan define
define('NAMA', 'Ahmad Mulia Huda'); //untuk penggunaan konstantanya harus menggunakan huruf kafital sepeti kalimat NAMA
                                    // defaine ini tidak bisa di tambahkan di dalam kelas dan untuk menyimpannya harus di luar kelas (global)

//pemanggilan tampil ke layar
echo NAMA;


echo "<br>";

const UMUR = 32;
echo UMUR;
echo "<hr>";


class Coba{
    const NAMA = "Ahmad Mulia Huda";
}

echo Coba::NAMA;
?>