<?php

namespace App\Controllers\Pemilih;

use App\Controllers\BaseController;
use App\Models\DetailModel;
use App\Models\PaslonModel;
use App\Models\PeriodeModel;
use App\Models\RiwayatPemilihanModel;
use App\Models\AkunModel;

class PemilihanController extends BaseController
{

    public function __construct()
    {
        $this->AkunModel = new AkunModel();
        $this->DetailModel = new DetailModel();
        $this->PaslonModel = new PaslonModel();
        $this->PeriodeModel = new PeriodeModel();
        $this->RiwayatPemilihanModel = new RiwayatPemilihanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pasangan Calon',
            'active1' => 'border-bottom border-purple border-4',
            'active2' => 'text-secondary',
            'pasangan_calon' => $this->PaslonModel->findAll()
        ];

        return view('pemilihan/paslon', $data);
    }

    public function detail($id_paslon)
    {
        $data = [
            'active1' => 'border-bottom border-purple border-4',
            'active2' => 'text-secondary',
            'title' => 'Detail',
            'paslon' => $this->PaslonModel->find($id_paslon)
        ];


        return view('pemilihan/detail', $data);
    }


    public function token($id_paslon)
    {
        // dd($this->RiwayatPemilihanModel->findColumn('nis') == session()->get('nis') ? 'true' : 'false');
        // dd($this->RiwayatPemilihanModel->find(session()->get('nis')));

        // $cekdata = $this->RiwayatPemilihanModel->findColumn('nis');
        // dd($cekdata->getArray() == session()->get('nis') ? 'true' : 'false');


        // if ($this->RiwayatPemilihanModel->find('nis') == $_SESSION['nis']) {
        //     session()->setFlashdata('msg', 'Anda sudah memilih');
        //     return redirect()->to('/paslon');
        // }

        $data = [
            'title' => 'Konfirmasi Token',
            'paslon' => $this->PaslonModel->find($id_paslon),
        ];

        return view('pemilihan/token', $data);
    }

    public function countdown()
    {
        $data = [
            'title' => 'Hasil Pemilihan',
            'active1' => 'text-secondary',
            'active2' => 'border-bottom border-purple border-4',
            'set_waktu' => $this->PeriodeModel->findAll()
        ];

        return view('pemilihan/countdown', $data);
    }

    public function setcountdown()
    {
        $data = [
            'tahun' => $this->request->getVar('tahun'),
            'tanggal' => $this->request->getVar('tanggal'),
            'bulan' => $this->request->getVar('bulan')
        ];

        $this->PeriodeModel->save($data);
    }

    public function hasil()
    {
        $data = [
            'title' => 'Hasil Pemilihan',
            'active1' => 'text-secondary',
            'active2' => 'border-bottom border-purple border-4'
        ];

        return view('pemilihan/hasil', $data);
    }

    public function addriwayat()
    {
        $data = [
            'nis' => $this->request->getVar('nis'),
            'token' => $this->request->getVar('token'),
            'paslon_dipilih' => $this->request->getVar('id_paslon'),
        ];

        $this->RiwayatPemilihanModel->insert($data);
        // $this->AkunModel->query("UPDATE `akun` SET `token` = '0' WHERE `akun`.`nis` = ;");
        return redirect()->to('/paslon/finished');
    }

    public function finished()
    {
        $data = [
            'title' => 'Konfirmasi Selesai',
        ];

        return view('pemilihan/finished_confirm', $data);
    }
}
