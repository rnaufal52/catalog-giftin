<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;
    protected $allowedFields = ['fullname', 'username', 'email', 'password_hash', 'active', 'user_image'];

    public function countuser()
    {
        $builder = $this->db->table($this->table);
        $jumlahusers = $builder->countAllResults();
        return $jumlahusers;
    }
}
