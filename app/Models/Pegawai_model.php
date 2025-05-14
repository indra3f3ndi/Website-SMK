<?php

namespace App\Models;

use CodeIgniter\Model;

class Pegawai_model extends Model
{
    protected $table      = 'pegawai';
    protected $primaryKey = 'id';
    protected $allowedFields = ['namapegawai', 'jenkel', 'alamat'];

    public function getPegawai()
    {
        return $this->findAll();
    }

    public function deletePegawai($id)
    {
        return $this->delete($id);
    }
}