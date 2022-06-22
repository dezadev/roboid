<?php

namespace App\Controllers;

use App\Models\MateriModel;
use App\Models\HomeModel;

class Home extends BaseController
{
    protected $MateriModel;
    protected $builder;

    public function __construct()
    {
        $this->materiModel = new MateriModel();
        $this->homeModel = new HomeModel();
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('materi');
    }
    public function index()
    {
        $data = [
            'title' => 'DASBOARD',
            'user' => $this->homeModel->jumlah_user()
        ];

        // return view('template/_home', $data);
        if (session()->get('role') == 1) {
            return view('template/_orihome', $data);
        } else {
            return redirect()->to('home/asy');
        }
    }
    public function asy()
    {
        $builder = $this->db->table("materi");

        $builder->where('group_materi', 'asy');
        $query = $builder->get();
        $asy = $query->getResult();

        $builder->where('group_materi', 'asmo id');
        $query = $builder->get();
        $asmo = $query->getResult();

        $data = [
            'title' => 'ASYS',
            'materi' => $asy,
            'asmoid' => $asmo
        ];

        return view('page/asy', $data);
    }
    public function claim()
    {
        $builder = $this->db->table("materi");
        $builder->where('group_materi', 'claim');
        $query = $builder->get();
        $lkh = $query->getResult();
        $data = [
            'title' => 'CLAIM',
            'materi' => $lkh
        ];
        return view('page/claim', $data);
    }
    public function lkh()
    {
        $builder = $this->db->table("materi");
        $builder->where('group_materi', 'lkh');
        $query = $builder->get();
        $lkh = $query->getResult();

        $builder->where('group_materi', 'iti');
        $query = $builder->get();
        $iti = $query->getResult();

        $builder->where('group_materi', 'sni');
        $query = $builder->get();
        $sni = $query->getResult();

        $data = [
            'title' => 'PQM',
            'materi' => $lkh,
            'iti' => $iti,
            'sni' => $sni
        ];
        return view('page/lkh', $data);
    }
    public function nsp()
    {
        $builder = $this->db->table("materi");
        $builder->where('group_materi', 'nsp');
        $query = $builder->get();
        $nsp = $query->getResult();
        $data = [
            'title' => 'NSP',
            'materi' => $nsp
        ];
        return view('page/nsp', $data);
    }
}
