<?php

class Home extends Controller
{
    public function index()
    {
        
    $this->view('home/index');
    echo "home/index";
    }
}
