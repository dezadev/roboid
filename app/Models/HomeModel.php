<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    public function jumlah_user()
    {
        return $this->db->table('users')->countAll();
    }
}
