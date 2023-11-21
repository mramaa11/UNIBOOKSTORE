<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Model_Home;

class Home extends BaseController
{
    public function __construct()
    {
        $this->Model_Home = new Model_Home();
    }

    public function index()
    {
        $data = [
            'judul' => 'Home',
            'subjudul' => ' ',
            'menu' => 'home',
            'submenu' => ' ',
            'page' => 'index',
            'buku' => $this->Model_Home->AllData(),
        ];
        return view('template', $data);
    }

    public function CariBuku()
    {
        $detail = [
            'cari' => $_POST['cari'],
        ];
        $this->Model_Home->cari($detail);
        $data = [
            'judul' => 'Home',
            'subjudul' => ' ',
            'menu' => 'home',
            'submenu' => ' ',
            'page' => 'index',
            'buku' => $this->Model_Home->cari($detail),
        ];
        return view('template', $data);
    }
}
