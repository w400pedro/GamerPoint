<?php

namespace App\Models;
use CodeIgniter\Model;

class CategoriasModel extends Model {
    protected $table = 'categoria';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome'];

    public function getAll($id = null){
        if ($id == null){ //AQUI TU PEGA O NOME DAS CATEGORIAS PRA USAR NO SELECT DA ABA DE ITENS LA
            return $this->findAll();
        }
        return $this->asArray()->where(['id' => $id])->first();
    }
}

?>