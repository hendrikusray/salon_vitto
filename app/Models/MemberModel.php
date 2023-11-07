<?php

namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';

    public function getCategory()
    {
        $query = $this->table('user');
        return $query->get()->getResultArray();
    }

    // Method to insert data into the 'user' table
    public function insertUser($data)
    {

        return $this->db->table('user')->insert($data);
    }

    public function checkConnection()
    {
        try {
            $db = \Config\Database::connect();
            $db->initialize();

            if ($db->connect()) {
                return "Database connection successful!";
            } else {
                return "Database connection failed!";
            }
        } catch (\Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }

    public function getUserByEmail($username)
    {
        return $this->where('username', $username)->first();
    }
}
