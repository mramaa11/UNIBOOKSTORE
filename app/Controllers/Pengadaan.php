<?php

namespace App\Controllers;

use App\Models\Model_Home;
use App\Models\Model_Pengadaan;

class Pengadaan extends BaseController
{
    public function __construct()
    {
        $this->Model_Pengadaan = new Model_Pengadaan();
        $this->Model_Home = new Model_Home();
    }   
    
    public function index()
    {
        $data = [
            'judul' => 'Pengadaan ',
            'subjudul' => 'Pengadaan Buku',
            'menu' => 'pengadaan',
            'submenu' => ' ',
            'page' => 'pengadaan',
            'buku' => $this->Model_Pengadaan->AllData(),
        ];
        return view('template', $data);
    }
}
