<?php 

class About{
    public function index($nama = 'ahmad', $status = 'mahasiswa'){
        echo "hallo saya $nama, saya dalah seorang $status di universitas pasundan";
    }
    public function page(){
        echo 'about/page';
    }
}