<?php
namespace App\Controllers;
use App\Models\ItensModel;
use App\Models\CategoriasModel;

class itemController extends BaseController {
    public function showInsert(){
        //AQUI TU CHAMA A FUNCAO DO MODELS PRA PEGAR TODAS CATEGORIAS e passa por parametro pra view return view('insertItem', $result);
        return view('insertItem');
    }

    public function cadastrarItem(){
        //ve o que fiz no userController e faz semelhante aqui k

    }

}

