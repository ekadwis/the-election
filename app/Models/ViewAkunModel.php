<?php

namespace App\Models;

use CodeIgniter\Model;

class ViewAkunModel extends Model
{
    protected $table            = 'akun_siswa';
    protected $allowedFields    = [];

    // public function getPemilih()
    // {
    //     // $db = \Config\Database::connect();
    //     // $query = $db->query("SELECT * FROM akun_siswa");
    //     // $query = $query->getResultArray();
    //     // // $querys = $query->getRow();
    //     // // foreach ($querys as $q)
    //     // // dd($query[0]);
    //     // return $query;


    //     return $this->db->table('akun')
    //         ->join('siswa', 'siswa.nis=akun.nis')
    //         ->get()->getResultArray();
    // }
}
