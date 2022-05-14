<?php
namespace App\Models;
use CodeIgniter\Model;

class ItensModel extends Model {

    protected $table = 'item';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome' ,'categoria', 'preco', 'gamegenero', 'desenvolvedora']; //QUANDO A CATEGORIA NÃO FOR GAMES TU PASSA OS OUTROS VALORES ALI COMO NULL

    public function getAll($id = null){ // ESSA FUNCAO PEGA TUDO SOBRE TODOS OS ITENS, E CASO VENHA ALGUM ID COMO PARAMETRO, PEGA SÓ O ITEM COM AQUELE ID PRA CHAMAR ELA TU USA $result = $Itens_model->getAll($id); (passa parametro só se quiser)
        if ($id == null){
           return $this->findAll(); 
        }
        return $this->asArray()->where(['id' == $id])->first();
    }

    public function insertItem(){


    }

}

