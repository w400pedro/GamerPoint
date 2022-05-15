<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CategoriesModel;

class categoriaController extends BaseController
{
      public function showInsert()
    {
        return view('insertCategoria'); //n testei se ta funcionando
    }

    public function cadastrarCategoria()
    {
        //ve o que fiz no userController e faz semelhante aqui k

    }
}