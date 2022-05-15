<?php
namespace App\Models;
use CodeIgniter\Model;

class ItensModel extends Model {

    protected $table = 'item';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome' ,'categoria', 'preco', 'gamegenero', 'desenvolvedora'];

    public function getAll($id = null){
        if ($id == null){
           return $this->findAll(); 
        }
        return $this->asArray()->where(['id' == $id])->first();
    }

    public function insertItem(){


    }

}

