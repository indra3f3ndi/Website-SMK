<?php

namespace App\Models;

use CodeIgniter\Model;

class Tamu_model extends Model
{
    protected $table      = 'tamu';
    protected $primaryKey = 'id_tamu';
    protected $allowedFields = ['namatamu', 'nomortamu', 'jenkel', 'alamattamu'];

    public function getTamu()
    {
        return $this->findAll();
    }

    public function deleteTamu($id)
    {
        return $this->delete($id);
    }
}