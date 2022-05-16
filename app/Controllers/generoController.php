<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\GeneroModel;

class generoController extends BaseController
{
      public function showInsert()
    {
        return view('insertGenero'); //n testei se ta funcionando
    }

    public function cadastrarGenero()
    {
        $rules = [
            'nome' => 'required',
        ];
		$genero_model = new GeneroModel();

		if ($this->validate($rules)){
			$data = array(
                'nome' => $this->request->getVar('nome'), // 'nome' = $_POST['nome']
			);
			$genero_model->insert_genero($data);
			$this->session->setFlashdata('msg', 'Genero Cadastrado com sucesso'); //Envia mensagem para o view
 			return redirect()->to(base_url('/genero'));	 
		}else{
			$this->session->setFlashdata('msg', 'Ops! Não foi possivel cadastrar o Genero');
			return redirect()->to(base_url('/genero'));
		}

    }
}