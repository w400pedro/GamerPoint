<?php

namespace App\Models;

use CodeIgniter\Model;

class DevelopersModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'desenvolvedora';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nome'];

    public function getAll($id = null)
    {
        if ($id == null) {
            return $this->findAll();
        }
        return $this->asArray()->where(['id' => $id])->first();
    }
}
