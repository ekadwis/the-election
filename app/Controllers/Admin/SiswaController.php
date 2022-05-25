<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SiswaModel;

class SiswaController extends BaseController
{

    public function __construct()
    {
        $this->SiswaModel = new SiswaModel();
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_akun_siswa') ? $this->request->getVar('page_akun_siswa') : 1;

        $data = [
            'title' => 'Data Siswa',
            'button1' => 'Tambah Siswa',
            'siswa' => $this->SiswaModel->paginate(10, 'akun_siswa'),
            'pager' => $this->SiswaModel->pager,
            'currentPage' => $currentPage,
        ];

        return view('admin/siswa/data-siswa', $data);
    }

    // tambah siswa
    public function create()
    {
        $data = [
            'nis' => $this->request->getVar('nis'),
            'id_kelas' => $this->request->getVar('id_kelas'),
            'id_jurusan' => $this->request->getVar('id_jurusan'),
            'id_angkatan' => $this->request->getVar('id_angkatan'),
            'nama' => $this->request->getVar('nama'),
            'nisn' => $this->request->getVar('nisn'),
            'no_absen' => $this->request->getVar('no_absen'),
            'no_telp' => $this->request->getVar('no_telp'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),
        ];

        $this->SiswaModel->insert($data);

        return redirect()->to('/admin/siswa/data-siswa')->with('msg', 'Berhasil menambahkan siswa.');
    }

    // edit siswa 
    public function edit($nis)
    {
        $data = [
            'title' => 'Form Edit Siswa',
            'siswa' => $this->SiswaModel->find($nis),
        ];

        return view('admin/siswa/edit-siswa', $data);
    }

    public function update()
    {
        $data = [
            'nis' => $this->request->getVar('nis'),
            'nama' => $this->request->getVar('nama'),
            'nisn' => $this->request->getVar('nisn'),
            'no_absen' => $this->request->getVar('no_absen'),
            'no_telp' => $this->request->getVar('no_telp'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),
        ];

        $this->SiswaModel->save($data);

        return redirect()->to('/admin/siswa')->with('msg', 'Berhasil Memperbarui Siswa');
    }

    public function delete($nis)
    {
        // $this->SiswaModel->where(array('nis' => $nis))->delete();
        $this->SiswaModel->delete($nis);

        return redirect()->to('/admin/siswa')->with('msg', 'Berhasil Menghapus Siswa');
    }
}
