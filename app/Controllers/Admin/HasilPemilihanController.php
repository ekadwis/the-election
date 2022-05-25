<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PaslonModel;

class HasilPemilihanController extends BaseController
{

    public function __construct()
    {
        $this->PaslonModel = new PaslonModel();
    }

    public function index()
    {

        $db = \Config\Database::connect();

        $jumlahSuara = $db->query("SELECT paslon_dipilih, COUNT(paslon_dipilih) AS jumlah_suara FROM riwayat_pemilihan GROUP BY paslon_dipilih;");
   
        $result = $jumlahSuara->getResultArray();
        foreach($result as $r);
        
        $total = $db->query("SELECT COUNT(paslon_dipilih) FROM riwayat_pemilihan");
        $resultTotal = $total->getResult();
        foreach($resultTotal as $rs);


        
        $data = [
            'title' => 'Hasil Pemilihan',
            'button1' => 'Set waktu pemilihan',
            'hasil' => $result,
            'total' => $resultTotal,
            'paslon' => $this->PaslonModel->findAll()
        ];

        return view('admin/hasil-pemilihan', $data);
    }
}
