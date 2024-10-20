<?php 

class About extends Controller{
    public function index($nama = 'ahmad', $status = 'mahasiswa')
    { //method
        $data['nama']= $nama;
        $data['status'] = $status;
        $data['judul'] = 'About';

        $this->view('templets/header', $data);
        $this->view('about/index', $data);
        $this->view('templets/footer');
    }
    public function page(){
        $data['judul'] = 'page';
        $this->view('templets/header', $data);
        $this->view('about/page');
        $this->view('templets/footer');
    }
}