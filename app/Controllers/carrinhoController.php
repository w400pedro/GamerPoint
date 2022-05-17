<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CarrinhoModel;

class carrinhoController extends BaseController
{
      public function showInsert()
    {
        return view('showitens'); //n testei se ta funcionando
    }

    public function cadastrarCarrinho()
    {
        $rules = [
            'usuario' => 'required',
            'item' => 'required'
        ];
		$carrinho_model = new CarrinhoModel();

        $a = $this->request->getVar('usuario');
        echo($a);
        echo("<br>");
        $b = $this->request->getVar('comprar');
        echo($b);
    }
}