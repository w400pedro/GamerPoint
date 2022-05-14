<?php
namespace App\Models;
use CodeIgniter\Model;

    class UsersModel extends Model {

        protected $table = 'usuario';
        protected $primaryKey = 'id';
        protected $allowedFields = ['nome' ,'email'];

        public function getAll($id = null){
            if ($id == null){
               return $this->findAll();
            }
            return $this->asArray()->where(['id' == $id])->first();
        }

        public function insert_user($data)
        {
            return $this->insert($data);
        }
    }