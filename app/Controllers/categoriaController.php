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
        $rules = [
            'nome' => 'required',
        ];
		$categoria_model = new CategoriesModel();

		if ($this->validate($rules)){
			$data = array(
                'nome' => $this->request->getVar('nome'), // 'nome' = $_POST['nome']
			);
			$categoria_model->insert_categoria($data);
			$this->session->setFlashdata('msg', 'Categoria Cadastrada com sucesso'); //Envia mensagem para o view
 			return redirect()->to(base_url('/categorias'));	 
		}else{
			$this->session->setFlashdata('msg', 'Ops! Não foi possivel cadastrar a categoria');
			return redirect()->to(base_url('/categorias'));
		}

    }
}