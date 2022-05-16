<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ItensModel;
use App\Models\CategoriesModel;
use App\Models\DevelopersModel;
use App\Models\GendersModel;
use App\Models\UsersModel;

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

    public function cadastraritem(){
		$rules = [
            'nome' => 'required',
            'categoria' => 'required',
            'preco' => 'required',
            'gamegenero' => 'required',
            'desenvolvedora' => 'required'
        ];
		$item_model = new ItensModel();

		if ($this->validate($rules)){
			$data = array(
                'nome' => $this->request->getVar('nome'),
                'categoria' => $this->request->getVar('categoria'),
                'preco' => $this->request->getVar('preco'),
                'gamegenero' => $this->request->getVar('gamegenero'),
                'desenvolvedora' => $this->request->getVar('desenvolvedora')
			);
            if($data["categoria"] != 1){
                unset($data["gamegenero"]);
                unset($data["desenvolvedora"]);
            }

			$item_model->insertItem($data);
			$this->session->setFlashdata('msg', 'Item Cadastrado com sucesso');
 			return redirect()->to(base_url('/item'));	 
		}else{
			$this->session->setFlashdata('msg', 'Ops! Não foi possivel cadastrar o item');
			return redirect()->to(base_url('/item'));
		}
	}

    public function showItens(){
        $item_model = new ItensModel();
        $usuario_model = new UsersModel();
        $result1 = $item_model->getAll();
        $result2 = $usuario_model->getAll();
        $result = [$result1, $result2];
        return view ('showItens', ['result' => $result]);
    }
}
