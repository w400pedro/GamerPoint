<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ItensModel;
use App\Models\CategoriesModel;
use App\Models\DevelopersModel;
use App\Models\GendersModel;

class itemController extends BaseController
{
      public function showInsert()
    {
        $desenvolvedora_model = new DevelopersModel();
        $categoria_model = new CategoriesModel();
        $genero_model = new GendersModel();
        $result1 = $categoria_model->getAll();
        $result2 = $desenvolvedora_model->getAll();
        $result3 = $genero_model->getAll();
        $resultarray = [$result1, $result2, $result3];
        return view('insertItem', ['result'=>$resultarray]);
    }

    public function cadastrarItem()
    {
        //ve o que fiz no userController e faz semelhante aqui k

    }

    public function showItens(){
        $item_model = new ItensModel();
        $result = $item_model->getAll();
        return view ('showItens', ['item' => $result]);
    }
}
