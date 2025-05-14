<?php

namespace App\Models;

use CodeIgniter\Model;

class Siswa_model extends Model
{
    protected $table      = 'siswa';
    protected $primaryKey = 'id_siswa';
    protected $allowedFields = ['namasiswa', 'nomorsiswa', 'jenkel', 'alamatsiswa'];

    public function getSiswa()
    {
        return $this->findAll();
    }

    public function deleteSiswa($id)
    {
        return $this->delete($id);
    }
}