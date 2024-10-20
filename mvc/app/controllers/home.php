<?php  

class Home extends Controller{
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('templets/header', $data);
        $this->view('home/index');
        $this->view('templets/footer');
    }
}