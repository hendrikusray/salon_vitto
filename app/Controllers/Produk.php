<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\IncomingRequest;


class Produk extends BaseController
{
    public function index(): string
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->getLayanan(); // Assuming you have a method like getAllProducts() in your model

        return view('layanan/index', $data);
    }

    public function post()
    {
        if ($this->request->isAJAX()) {
            $nama_layanan = $this->request->getPost('nama_layanan');
            $jenis_layanan = $this->request->getPost('jenis_layanan');
            $harga_layanan = $this->request->getPost('harga_layanan');


            $categoryModel = new ProductModel();
            $data = [
                'nama_layanan' => $nama_layanan,
                'harga_layanan' => $harga_layanan,
                'jenis_layanan' => $jenis_layanan,
                'id_user' => 1,
            ];
            $insertedId = $categoryModel->insertLayanan($data);


            if ($insertedId) {
                // Return a JSON response for success
                return $this->response->setJSON(['success' => true, 'inserted_id' => $insertedId]);
            } else {
                // Return a JSON response for failure
                return $this->response->setJSON(['success' => false, 'error' => 'Failed to insert user']);
            }
        } else {
            // Method not allowed for non-AJAX requests
            return $this->response->setStatusCode(405)->setJSON(['error' => 'Method not allowed']);
        }
    }

    public function delete()
    {
        if ($this->request->isAJAX()) {
            $id_layanan = $this->request->getPost('id');

            $categoryModel = new ProductModel();
            $result = $categoryModel->deleteLayanan($id_layanan);

            if ($result) {
                // Return a JSON response for success
                return $this->response->setJSON(['success' => true]);
            } else {
                // Return a JSON response for failure
                return $this->response->setJSON(['success' => false, 'error' => 'Failed to delete layanan']);
            }
        } else {
            // Method not allowed for non-AJAX requests
            return $this->response->setStatusCode(405)->setJSON(['error' => 'Method not allowed']);
        }
    }

    public function indexProduk()
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->getProduct(); // Assuming you have a method like getAllProducts() in your model
        return view('produk/index', $data);
    }

    public function postProduk()
    {
        $request = service('request');

        // Retrieve form data
        $nama_produk = $request->getPost('nama_produk');
        $jenis_produk = $request->getPost('jenis_produk');
        $harga_produk = $request->getPost('harga_produk');
        $jumlah_stok = $request->getPost('jumlah_stok');

        // Handle file upload
        $foto = $this->request->getFile('foto');
        $fotoName = '';

        if ($foto->isValid() && !$foto->hasMoved()) {
            $fotoName = $foto->getRandomName();
            $foto->move('../writable/uploads', $fotoName); // Adjust the upload directory as needed
        }

        // Insert data into the "produk" table using the model
        $db = \Config\Database::connect();
        $builder = $db->table('produk'); // Adjust the table name if needed

        $data = [
            'nama_produk' => $nama_produk,
            'jenis_produk' => $jenis_produk,
            'harga_produk' => $harga_produk,
            'jumlah_stok' => $jumlah_stok,
            'foto' => $fotoName,
        ];

        $builder->insert($data);
        // Return a JSON response (you might want to customize this based on your needs)
        return $this->response->setJSON(['success' => true, 'message' => 'Product successfully added']);
    }
}
