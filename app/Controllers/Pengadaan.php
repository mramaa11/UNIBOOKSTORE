<?php

namespace App\Controllers;

class Pengadaan extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Pengadaan',
            'subjudul' => ' ',
            'menu' => 'pengadaan',
            'submenu' => ' ',
            'page' => 'pengadaan'
        ];
        return view('template', $data);
    }
}
