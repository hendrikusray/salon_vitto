<?php
// app/Controllers/FilesController.php

namespace App\Controllers;

use CodeIgniter\Controller;

class FilesController extends Controller
{
    public function index($filename)
    {
        $path = WRITEPATH . 'uploads/' . $filename;
        if (file_exists($path)) {
            // Set the appropriate content type based on the file type
            $mimeType = mime_content_type($path);
            $this->response->setHeader('Content-Type', $mimeType);

            // Output the file content
            readfile($path);

            return $this->response;
        }


        // If the file doesn't exist, you can handle it accordingly
        return $this->response->setStatusCode(404)->setJSON(['error' => 'File not found']);
    }
}
