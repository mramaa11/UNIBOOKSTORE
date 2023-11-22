<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Pengadaan extends Model
{
    protected $table            = 't_buku';
    protected $primaryKey       = 'id_buku';
    protected $allowedFields    = ['kategori', 'nama_buku', 'harga', 'stok', 'nama_penerbit'];
    
    // public function AllData()
    // {
    //     return $this->findAll();
    // }

    public function AllData($stok = 10)
    {
        return $this->db->table('t_buku')->where('stok <', '10')->orderBy('stok', "asc")->get()->getResultArray();
    }


}
