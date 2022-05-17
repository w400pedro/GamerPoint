<?php

namespace App\Models;
use CodeIgniter\Model;

class CarrinhoModel extends Model {
    protected $table = 'itemusuario';
    protected $primaryKey = 'id';
    protected $allowedFields = ['item' ,'usuario'];

    public function getAll($id = null)
    {
        if ($id == null) {
            return $this->findAll();
        }
        return $this->asArray()->where(['id' => $id])->first();
    }

    public function insert_carrinho($data)
    {
        return $this->insert($data);
    }
}
