<?php

namespace App\Controllers;

use App\Models\ModelAuth;

use CodeIgniter\RESTful\ResourceController;

class Home extends ResourceController
{
    public function index()
    {
        $this->ModelAuth = new ModelAuth();
        $id = session()->get('id');
        $profil = $this->ModelAuth->PilihId($id)->getRow();
        $data = array(
            'title' => 'Home',
            'isi'   => 'v_home',
            'profil' => $profil
        );
        return view('layout/v_wrapper', $data);
    }
}
