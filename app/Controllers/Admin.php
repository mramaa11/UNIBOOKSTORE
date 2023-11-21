<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Model_Admin;
use App\Models\Model_Home;
use CodeIgniter\Exceptions\AlertError;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->Model_Admin = new Model_Admin();
        $this->Model_Home = new Model_Home();
    }   

    public function index()
    {
        $data = [
            'judul' => 'Admin',
            'subjudul' => ' ',
            'menu' => 'admin',
            'submenu' => ' ',
            'page' => 'admin',
            'buku' => $this->Model_Home->AllData(),
            'penerbit' => $this->Model_Admin->AllData(),
        ];
        return view('template', $data);
    }

    public function tambah()
    {
        $data = [
            'id_buku' => $this->request->getPost('id_buku'),
            'kategori' => $this->request->getPost('kategori'),
            'nama_buku' => $this->request->getPost('nama_buku'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok'),
            'nama_penerbit' => $this->request->getPost('nama_penerbit'),
        ];
        $this->Model_Admin->Tambah($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('Admin');  
    }

    public function tambahp()
    {
        $data = [
            'id_penerbit' => $this->request->getPost('id_penerbit'),
            'nama_penerbit' => $this->request->getPost('nama_penerbit'),
            'alamat' => $this->request->getPost('alamat'),
            'kota' => $this->request->getPost('kota'),
            'telepon' => $this->request->getPost('telepon'),
        ];
        $this->Model_Admin->Tambahp($data);
        session()->setFlashdata('pesanp', 'Data Berhasil Ditambahkan');
        return redirect()->to('Admin');  
    }

    public function ubah($id_buku)
    {
        $data = [
            'id_buku' => $id_buku,
            'kategori' => $this->request->getPost('kategori'),
            'nama_buku' => $this->request->getPost('nama_buku'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok'),
            'nama_penerbit' => $this->request->getPost('nama_penerbit'),
        ];
        $this->Model_Admin->ubahdata($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('Admin');
    }

    public function ubahp($nama_penerbit)
    {
        $data = [
            'nama_penerbit' => $nama_penerbit,
            'id_penerbit' => $this->request->getPost('id_penerbit'),
            'alamat' => $this->request->getPost('alamat'),
            'kota' => $this->request->getPost('kota'),
            'telepon' => $this->request->getPost('telepon'),
        ];
        $this->Model_Admin->ubahdatap($data);
        session()->setFlashdata('pesanp', 'Data Berhasil Diubah');
        return redirect()->to('Admin');
    }

    public function hapus($id_buku)
    {
        $data = [
            'id_buku' => $id_buku,
        ];
        $this->Model_Admin->hapusdata($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('Admin');
    }
    
    public function hapusp($nama_penerbit)
    {
        $data = [
            'nama_penerbit' => $nama_penerbit,
        ];
        $this->Model_Admin->hapusdatap($data);
        session()->setFlashdata('pesanp', 'Data Berhasil Dihapus');
        return redirect()->to('Admin');
    }

}
