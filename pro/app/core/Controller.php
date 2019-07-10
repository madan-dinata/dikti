<?php

// kelas utama yang akan dipanggil
class Controller
{ 
    public function view($view, $data=[])
    {   
        require_once '../../app/views/'.$view. '.php';
    }
}
