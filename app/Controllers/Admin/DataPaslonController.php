<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PaslonModel;

class DataPaslonController extends BaseController
{
    public function __construct()
    {
        $this->PaslonModel = new PaslonModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Pasangan Calon',
            'button1' => 'Tambah Paslon',
            'paslon' => $this->PaslonModel->findAll()
        ];

        return view('admin/paslon/data_paslon', $data);
    }

    public function addpaslon()
    {
        $fotoKetua = $this->request->getFile('foto_ketua');
        if ($fotoKetua->getError() == 4) {
            $newnameKetua = 'default.jpg';
        } else {
            $newnameKetua = $fotoKetua->getRandomName();
            $fotoKetua->move('img', $newnameKetua);
        }

        $fotoWakil = $this->request->getFile('foto_wakil');
        if ($fotoWakil->getError() == 4) {
            $newnameWakil = 'default.jpg';
        } else {
            $newnameWakil = $fotoWakil->getRandomName();
            $fotoWakil->move('img', $newnameWakil);
        }


        $data = [
            'nama_ketua' => $this->request->getVar('nama_ketua'),
            'nama_wakil' => $this->request->getVar('nama_wakil'),
            'no_urut' => $this->request->getVar('no_urut'),
            'visi' => $this->request->getVar('visi'),
            'misi' => $this->request->getVar('misi'),
            'program_kerja' => $this->request->getVar('program_kerja'),
            'periode' => $this->request->getVar('periode'),
            'foto_ketua' => $newnameKetua,
            'foto_wakil' => $newnameWakil
        ];

        $this->PaslonModel->insert($data);

        return redirect()->to('/admin/paslon')->with('msg', 'Berhasil menambahkan paslon.');       
    }

    public function detail($id_paslon)
    {

        $data = [
            'title' => 'Detail',
            'result' => $this->PaslonModel->find($id_paslon)
        ];

        return view('admin/paslon/detail-paslon', $data);
    }


    public function edit($id_paslon)
    {
        $result = $this->PaslonModel->find($id_paslon);

        $data = [
            'title' => 'Edit Form',
            'result' => $result
        ];

        return view('admin/paslon/edit-paslon', $data);
    }

    public function delete($id_paslon)
    {
        $this->PaslonModel->delete($id_paslon);
        return redirect()->to('/admin/paslon')->with('msg', 'Berhasil Menghapus Pasangan Calon');
    }

    public function updatepaslon($id_paslon)
    {
        $fotoKetua = $this->request->getFile('foto_ketua');
        if ($fotoKetua->getError() == 4) {
            $newnameKetua = 'default.jpg';
        } else {
            $newnameKetua = $fotoKetua->getRandomName();
            $fotoKetua->move('img', $newnameKetua);
        }

        $fotoWakil = $this->request->getFile('foto_wakil');
        if ($fotoWakil->getError() == 4) {
            $newnameWakil = 'default.jpg';
        } else {
            $newnameWakil = $fotoWakil->getRandomName();
            $fotoWakil->move('img', $newnameWakil);
        }
        $data = [
            'nama_ketua' => $this->request->getVar('nama_ketua'),
            'nama_wakil' => $this->request->getVar('nama_wakil'),
            'no_urut' => $this->request->getVar('no_urut'),
            'visi' => $this->request->getVar('visi'),
            'misi' => $this->request->getVar('misi'),
            'program_kerja' => $this->request->getVar('program_kerja'),
            'periode' => $this->request->getVar('periode'),
            'foto_ketua' => $newnameKetua,
            'foto_wakil' => $newnameWakil
        ];

        $this->PaslonModel->save($data);

        return redirect()->to('/admin/paslon')->with('msg', 'Berhasil Memperbarui Pasangan Calon');
    }
}
