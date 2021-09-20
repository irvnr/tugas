<?php


namespace App\Controllers;

use App\Models\ModelAuth;

class User extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelAuth = new ModelAuth();
    }

    public function index()
    {
        $id = session()->get('id');
        $profil = $this->ModelAuth->PilihId($id)->getRow();
        $data = array(
            'title' => 'Home',
            'isi'   => 'v_user',
            'profil' => $profil
        );
        return view('layout/v_wrapper', $data);
    }

    public function edit()
    {
        $model = new ModelAuth();

        $id = $this->request->getPost('id');
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);

        if ($validation == FALSE) {
            $data = array(
                'nama'  => $this->request->getPost('nama'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password')
            );
        } else {
            $dt = $model->PilihId($id)->getRow();
            $foto1 = $dt->foto;
            $path = '../public/fotoo/';
            /* @unlink($path . $foto1); */
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/fotoo/');
            $data = array(
                'nama'  => $this->request->getPost('nama'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                'foto' => $upload->getName()
            );
        }
        $model->edit_data($id, $data);
        return redirect()->to('User')->with('berhasil', 'Data Berhasil di Ubah');
    }
}
