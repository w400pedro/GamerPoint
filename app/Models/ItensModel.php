<?php
namespace App\Models;
use CodeIgniter\Model;

class ItensModel extends Model {

    protected $table = 'item';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome' ,'categoria', 'preco', 'gamegenero', 'desenvolvedora'];

    public function getAll(){
           return $this->select('item.id,item.nome, item.preco, item.gamegenero, categoria.nome as categoria, desenvolvedora.nome as desenvolvedora, gamegenero.nome as genero')->join('categoria', 'categoria.id = item.categoria')->join('desenvolvedora', 'desenvolvedora.id = item.desenvolvedora', 'left')->join('gamegenero', 'gamegenero.id = item.gamegenero', 'left')->orderby('1 asc')->findAll();
    }
    public function insertItem($data){
        return $this->insert($data);

    }

    public function getAllSearch($data){
        return $this->select('item.id,item.nome, item.preco, item.gamegenero, categoria.nome as categoria, desenvolvedora.nome as desenvolvedora, gamegenero.nome as genero')->join('categoria', 'categoria.id = item.categoria')->join('desenvolvedora', 'desenvolvedora.id = item.desenvolvedora', 'left')->join('gamegenero', 'gamegenero.id = item.gamegenero', 'left')->like('item.nome', $data)->orderby('1 asc')->findAll();
    }

}

