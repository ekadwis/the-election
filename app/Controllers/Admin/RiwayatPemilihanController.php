<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\RiwayatPemilihanModel;
use Config\Database;

class RiwayatPemilihanController extends BaseController
{
    public function __construct()
    {
        $this->RiwayatPemilihanModel = new RiwayatPemilihanModel();
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_akun_siswa') ? $this->request->getVar('page_akun_siswa') : 1;
        
  

        $data = [
            'riwayat' => $this->RiwayatPemilihanModel->paginate(10, 'akun_siswa'),
            'pager' => $this->RiwayatPemilihanModel->pager,
            'currentPage' => $currentPage,
            'title' => 'Riwayat Pemilihan',
        ];

        return view('admin/riwayat_pemilihan', $data);
    }
}
