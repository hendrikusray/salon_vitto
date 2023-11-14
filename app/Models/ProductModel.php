<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'layanan';
    protected $primaryKey = 'id_layanan';

    public function getLayanan()
    {
        return $this->db->table('layanan')->select('id_layanan, nama_layanan, jenis_layanan, harga_layanan')->get()->getResultArray();
    }

    public function getProduct()
    {
        return $this->db->table('produk')->select('id_produk, nama_produk, harga_produk, jumlah_stok, jenis_produk, foto')->get()->getResultArray();
    }

    // Method to insert data into the 'user' table
    public function insertLayanan($data)
    {
        return $this->db->table('layanan')->insert($data);
    }

    public function updateLayanan($layananId, $data)
    {
        return $this->db->table('layanan')->where('id_layanan', $layananId)->update($data);
    }

    public function deleteLayanan($id)
    {
        return $this->db->table('layanan')->where('id_layanan', $id)->delete();
    }

    public function deleteProduct($id)
    {
        return $this->db->table('produk')->where('id_produk', $id)->delete();
    }
}
