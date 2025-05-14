<?php

namespace App\Models;

use CodeIgniter\Model;

class Kegiatan_model extends Model
{
    protected $table      = 'kegiatan';
    protected $primaryKey = 'id_kegiatan';
    protected $allowedFields = ['namakeg', 'waktukeg', 'perihal'];

    public function getKegiatan()
    {
        return $this->findAll();
    }

    public function deleteKegiatan($id_kegiatan)
    {
        return $this->delete($id_kegiatan);
    }

    
}