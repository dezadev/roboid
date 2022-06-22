<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Register extends BaseController
{
    public function __construct()
    {
        $this->userModel = new UsersModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List User',
            'user' => $this->userModel->findAll()
        ];
        return view('/auth/vw_user', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Tambah User',
        ];
        return view('/auth/vw_register', $data);
    }
    public function process()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|min_length[4]|max_length[20]|is_unique[users.username]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 20 Karakter',
                    'is_unique' => 'Username sudah digunakan sebelumnya'
                ]
            ],
            'name' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 100 Karakter',
                ]
            ],
            'role' => [
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 1 Karakter',
                    'max_length' => '{field} Maksimal 1 Karakter',
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[50]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
            'password_conf' => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $users = new UsersModel();
        $users->insert([
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'name' => $this->request->getVar('name'),
            'role' => $this->request->getVar('role')
        ]);

        session()->setFlashdata('success', 'User Berhasil ditambahkan');
        return redirect()->to('/register');
    }
    public function delete($id)
    {
        $this->userModel->delete($id);
        session()->setFlashdata('success', 'data berhasil di hapus');
        return redirect()->to('/register');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'edit user',
            'user' => $this->userModel->getUserModel($id)
        ];

        return view('auth/ed_user', $data);
    }
    public function update($id)
    {
        $this->userModel->save([
            'id' => $id,
            'name'  => $this->request->getVar('name'),
            'username' => $this->request->getVar('username'),
            'role' => $this->request->getVar('role'),
            'password' => $this->request->getVar('password'),

        ]);

        session()->setFlashdata('success', 'user Berhasil diubah');
        return redirect()->to(base_url('/register'));
    }
}
