<?php 

if (!session_id()) session_start();
require_once '../app/init.php';

//dengan menggunakann teknik boostraping
$app = new App; //menjalankan kelas App yang ada di core