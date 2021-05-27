<?php

namespace App\Models;

use CodeIgniter\Model;

class Auth_model extends Model
{

    protected $table = "data_token";

    public function register($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query ? true : false;
    }

    public function cek_login($username)
    {
        $query = $this->table($this->table)
            ->where('username', $username)
            ->countAll();

        if ($query >  0) {
            $hasil = $this->table($this->table)
                ->where('username', $username)
                ->limit(1)
                ->get()
                ->getRowArray();
        } else {
            $hasil = array();
        }
        return $hasil;
    }
}
