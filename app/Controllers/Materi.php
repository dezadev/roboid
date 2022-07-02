<?php

namespace App\Controllers;

use App\Models\MateriModel;
use App\Models\GroupModel;

class Materi extends BaseController
{

    protected $MateriModel;
    protected $groupMode;

    public function __construct()
    {
        $this->materiModel = new MateriModel();
        $this->groupModel = new GroupModel();
        $this->db      = \Config\Database::connect();
    }
    public function index()
    {
        $curentPage = $this->request->getVar('page_halaman') ? $this->request->getVar('page_halaman') : 1;
        $data = [
            'title' => 'MATERI',
            'materi' => $this->materiModel->paginate(5, 'halaman'),
            // 'materi' => $this->materiModel->materi(),
            'pager' => $this->materiModel->pager,
            'curentPage' => $curentPage,
        ];
        return view('/materi/_view', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'UPLOAD',
            'group' => $this->groupModel->findAll()
        ];
        return view('materi/_upload', $data);
    }
    public function save()
    {
        if (!$this->validate([
            'group_materi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ],
            'nama_materi' => [
                'rules' => 'uploaded[nama_materi]|mime_in[nama_materi,application/pdf,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/msword,video/mp4,video/x-msvideo]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa pdf,doc',
                    // 'max_size' => 'Ukuran File Maksimal 500 MB'
                ]

            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $dataMateri = $this->request->getFileMultiple('nama_materi');
        foreach ($dataMateri as $img) {
            if ($img->isValid() && !$img->hasMoved()) {
                $fileName = $img->getName('nama_materi');
                $group_materi = $this->request->getPost('group_materi');
                $this->materiModel->save([
                    'nama_materi' => $fileName,
                    'group_materi' => $group_materi
                ]);

                $img->move('upload/', $fileName);
            }
        }

        session()->setFlashdata('success', 'materi Berhasil diupload');
        return redirect()->to(base_url('/materi'));
    }
    function download($id)
    {

        $data = $this->materiModel->find($id);
        return $this->response->download('upload/' . $data->nama_materi, null);
    }
    public function delete($id)
    {
        $namaFile = $this->materiModel->find($id);
        unlink('upload/' . $namaFile->nama_materi);

        $this->materiModel->delete($id);
        session()->setFlashdata('success', 'data berhasil di hapus');
        return redirect()->to('/materi');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Materi',
            'materi' => $this->materiModel->getMateri($id),
            'group' => $this->groupModel->findAll()
        ];

        return view('materi/_edit', $data);
    }
    public function update($id)
    {
        $namaFile = $this->materiModel->find($id);
        $fileName = 'upload/' . $namaFile->nama_materi;
        $nama_materi = $this->request->getPost('nama_materi');

        // $newname = rename($fileName, 'upload/' . $nama_materi);
        // $new = $newname->getName('nama_materi');
        $newname = move_uploaded_file($fileName, 'upload/' . $nama_materi);
        $group_materi = $this->request->getPost('group_materi');
        // dd($newname);
        $this->materiModel->save([
            'nama_materi' => $newname,
            'group_materi' => $group_materi
        ]);
        session()->setFlashdata('success', 'data berhasil di ubah');

        return redirect()->to('/materi');
    }
}
