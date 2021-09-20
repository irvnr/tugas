<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    protected $table = 'tb_login';

    public function saveregister($data)
    {
        $this->db->table('tb_login')->insert($data);
    }

    public function PilihId($id)
    {
        $query = $this->getWhere(['id' => $id]);
        return $query;
    }
    public function edit_data($id, $data)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function login($email, $password)
    {
        return $this->db->table('tb_login')->where([
            'email' => $email,
            'password' => $password,
        ])->get()->getRowArray();
    }

    public function getUsers()
    {
        return $this->findAll();
    }

    public function whereUsers()
    {
        $builder = $this->db->table('tb_login');
        $query = $builder->getWhere(['level' => '2']);
        return $query;
    }

    public function getUser($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere('id', $id)->getRowArray();
        }
    }
}
