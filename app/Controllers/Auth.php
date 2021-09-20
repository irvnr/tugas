<?php

namespace App\Controllers;

use App\Models\ModelAuth;
use Kint\Renderer\RichRenderer;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelAuth = new ModelAuth();
    }

    public function index()
    {
        $data = array(
            'title' => 'Register',
        );
        return view('auth1/login', $data);
    }

    public function saveregister()
    {
        if ($this->validate([
            'nama' => [
                'label' => 'Full Name',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi dan tidak boleh kosong !!!'
                ]
            ],
            'email' => [
                'label' => 'Email Adderss',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi dan tidak boleh kosong !!!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi dan tidak boleh kosong !!!'
                ]
            ],
            'repassword' => [
                'label' => 'Confirm Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi dan tidak boleh kosong !!!'
                ]
            ]
        ])) {
            //Jika Valid
            $data = array(
                'nama' => $this->request->getPost('nama'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                'foto' => ('user.png'),
                'level' => 2
            );
            $this->ModelAuth->saveregister($data);
            session()->setFlashdata('pesan', 'Register Berhasil');
            return redirect()->to(base_url('Auth'));
        } else {
            //Jika Tidak Valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Auth'));
        }
    }

    public function cekLogin()
    {
        if ($this->validate([
            'email' => [
                'label' => 'Email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi dan tidak boleh kosong!!!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi dan tidak boleh kosong !!!'
                ]
            ],
        ])) {
            # Jika Valid
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $cek = $this->ModelAuth->login($email, $password);
            if ($cek) {
                # jika datanya cocok
                session()->set('log', true);
                session()->set('id', $cek['id']);
                session()->set('nama', $cek['nama']);
                session()->set('email', $cek['email']);
                session()->set('password', $cek['password']);
                session()->set('level', $cek['level']);
                session()->set('foto', $cek['foto']);
                //login
                return redirect()->to(base_url('home'));
            } else {
                # jika datanya tidak cocok
                session()->setFlashdata('pesanLogin', 'Login gagal !!, Email Atau Password Tidak Cocok !!');
                return redirect()->to(base_url('Auth'));
            }
        } else {
            # Jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Auth'));
        }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('id');
        session()->remove('nama');
        session()->remove('email');
        session()->remove('password');
        session()->remove('level');
        session()->remove('foto');
        session()->setFlashdata('logout', 'Logout Berhasil');
        return redirect()->to(base_url('Auth'));
    }
}
