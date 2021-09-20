<?php

namespace App\Controllers;

use App\Models\ModelAuth;

class Admin extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new ModelAuth();
    }
    public function index()
    {
        $id = session()->get('id');
        $profil = $this->userModel->PilihId($id)->getRow();
        $users = $this->userModel->where('level', 2)
            ->findAll();
        $data = array(
            'title' => 'Home',
            'isi'   => 'v_admin',
            'users' => $users,
            'profil' => $profil
        );

        return view('layout/v_wrapper', $data);
    }

    public function delete($id)
    {
        $this->userModel->delete($id);
        return redirect()->to('admin');
    }
}
