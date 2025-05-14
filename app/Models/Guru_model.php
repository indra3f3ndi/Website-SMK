<?php

namespace App\Models;

use CodeIgniter\Model;

class Guru_model extends Model
{
    protected $table      = 'guru';
    protected $primaryKey = 'id_guru';
    protected $allowedFields = ['namaguru', 'nomorguru', 'jenkel', 'alamatguru'];

    public function getGuru()
    {
        return $this->findAll();
    }

    public function deleteGuru($id_guru)
    {
        return $this->delete($id_guru);
    }
}