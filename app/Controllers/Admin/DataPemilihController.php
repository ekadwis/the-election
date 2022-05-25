<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ViewAkunModel;
use App\Models\AkunModel;

class DataPemilihController extends BaseController
{
    public function __construct()
    {
        $this->ViewAkunModel = new ViewAkunModel();
        $this->AkunModel = new AkunModel();
    }


    public function generatePassword()
    {
        $karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
        $shuffle  = substr(str_shuffle($karakter), 0, 8);

        return $shuffle;
    }

    // generate a 6 number long token and if the start is 0 then regenerate again
    public function generateToken()
    {
        $token = rand(0, 999999);
        if ($token < 100000) {
            $token = $this->generateToken();
        }

        return $token;
    }


    public function index()
    {

        $currentPage = $this->request->getVar('page_akun_siswa') ? $this->request->getVar('page_akun_siswa') : 1;



        $data = [
            'title' => 'Data Akun Pemilih',
            'button1' => 'Tambah Akun',
            'akun' => $this->ViewAkunModel->paginate(6, 'akun_siswa'),
            'pager' => $this->ViewAkunModel->pager,
            'currentPage' => $currentPage,
            'generatePassword' => $this->generatePassword(),
            'generateToken' => $this->generateToken()
        ];

        return view('admin/data_pemilih', $data);
    }



    // create a pemilih account with id level of 2 and randomized password
    public function create_pemilih()
    {
        
        // $data = [
        //     'nis' => $this->request->getVar('id_akun'),
        //     'password' => $this->generatePassword(),
        //     'level' => 2,
        // ];
        // $this->AkunModel->insert($data);
        // return redirect()->to('/admin/pemilih');
    }

    // delete a pemilih account
    public function delete($id_akun)
    {
        $this->AkunModel->where(array('id_akun' => $id_akun))->delete();

        return redirect()->to('/admin/pemilih')->with('msg', 'Berhasil Menghapus Akun');
    }

    // edit a pemilih account
    public function edit($id_akun)
    {
        $data = [
            'title' => 'Form Edit Akun',
            'akun' => $this->AkunModel->find($id_akun),
        ];

        return view('admin/edit-akun', $data);
    }

    // update a pemilih account
    public function update($id_akun)
    {
        $data = [
            'id_akun' => $id_akun,
            'nis' => $this->request->getVar('nis'),
            'level' => $this->request->getVar('level'),
            'password' => $this->request->getVar('password'),
            'token' => $this->request->getVar('token'),
        ];

        $this->AkunModel->save($data);

        return redirect()->to('/admin/pemilih')->with('msg', 'Berhasil Memperbarui Akun');
    }

    // create a new account 
    public function create()
    {   
        // $db = \Config\Database::connect();

        // $nis = $this->request->getVar('nis');
        // $level = $this->request->getVar('level');
        // $password = $this->request->getVar('password');
        // $token = $this->request->getVar('token');   

        // $this->AkunModel->tambahakun($nis, $level, $password, $token);

        $data = [
            'nis' => $this->request->getVar('nis'),
            'level' => $this->request->getVar('level'),
            'password' => $this->request->getVar('password'),
            'token' => $this->request->getVar('token'),
        ];

        $this->AkunModel->insert($data);

        return redirect()->to('/admin/pemilih')->with('msg', 'Berhasil menambahkan akun.');
    }


    // public function index()
    // {

    //     $data = [
    //         'title' => 'Data Pemilih',
    //         'akun' => $this->AkunModel->getPemilih()->paginate(6, 'akun'),
    //         'pager' =>

    //     ];
    //     $pager = \Config\Services::pager();
    //     $data['pager'] = $model->pager;
    //     $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
    //     return view('admin/data_pemilih', $data);
    // }
}
