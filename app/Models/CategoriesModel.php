<?php

namespace App\Models;
use CodeIgniter\Model;

class CategoriesModel extends Model {
    protected $table = 'categoria';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome'];

    public function getAll($id = null)
    {
        if ($id == null) {
            return $this->findAll();
        }
        return $this->asArray()->where(['id' => $id])->first();
    }

    public function insert_categoria($data)
    {
        return $this->insert($data);
    }
}
