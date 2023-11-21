<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Home extends Model
{
    protected $table            = 't_buku';
    protected $primaryKey       = 'id_buku';
    protected $allowedFields    = ['kategori', 'nama_buku', 'harga', 'stok', 'nama_penerbit'];
    public function AllData()
    {
        return $this->orderBy('id_buku', "asc")->findAll();
    }

    public function cari($detail)
    {
        return $this->db->table('t_buku')->join(
            't_penerbit',
            't_penerbit.nama_penerbit=t_buku.nama_penerbit'
        )->where('nama_buku', $detail)->get()->getResultArray();
    }

}
