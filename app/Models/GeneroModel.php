<?php

namespace App\Models;
use CodeIgniter\Model;

class GeneroModel extends Model {
    protected $table = 'gamegenero';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome'];

    public function getAll($id = null)
    {
        if ($id == null) {
            return $this->findAll();
        }
        return $this->asArray()->where(['id' => $id])->first();
    }

    public function insert_genero($data)
    {
        return $this->insert($data);
    }
}
