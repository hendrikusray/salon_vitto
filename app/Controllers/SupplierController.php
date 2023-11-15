<?php

namespace App\Controllers;

use App\Models\MemberModel;

class SupplierController extends BaseController
{
    public function index()
    {
        return view('login/index');
    }

    public function post()
    {
        if ($this->request->isAJAX()) {
            $email = $this->request->getPost('email');
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            $categoryModel = new MemberModel();
            $data = [
                'email' => $email,
                'username' => $username,
                'password' => $hashedPassword,
                'id_role' => 2,
                // Add other fields as needed?
            ];
            $insertedId = $categoryModel->insertUser($data);
            

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

    public function login()
    {
        if ($this->request->isAJAX()) {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
    
            $memberModel = new MemberModel();
            $user = $memberModel->getUserByEmail($email);

            if(!$user) {
                return $this->response->setJSON(['success' => false, 'error' => 'user belum terdaftar']);
            }


            if ($user && isset($user['password']) && password_verify($password, $user['password'])) {
                // Passwords match, user is authenticated
                // You can set user session or return a JSON response for success
                return $this->response->setJSON(['success' => true, 'user_id' => $user['id_user']]);
            } else {
                // Invalid credentials
                return $this->response->setJSON(['success' => false, 'error' => 'salah password']);
            }
        } else {
            // Method not allowed for non-AJAX requests
            return $this->response->setStatusCode(405)->setJSON(['error' => 'Method not allowed']);
        }
    }
    
}
