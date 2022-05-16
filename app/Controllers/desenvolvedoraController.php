<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\DesenvolvedoraModel;

class desenvolvedoraController extends BaseController
{
      public function showInsert()
    {
        return view('insertDesenvolvedora'); //n testei se ta funcionando
    }

    public function cadastrarDesenvolvedora()
    {
        $rules = [
            'nome' => 'required',
        ];
		$desenvolvedora_model = new DesenvolvedoraModel();

		if ($this->validate($rules)){
			$data = array(
                'nome' => $this->request->getVar('nome'), // 'nome' = $_POST['nome']
			);
			$desenvolvedora_model->insert_desenvolvedora($data);
			$this->session->setFlashdata('msg', 'Desenvolvedora Cadastrada com sucesso'); //Envia mensagem para o view
 			return redirect()->to(base_url('/desenvolvedora'));	 
		}else{
			$this->session->setFlashdata('msg', 'Ops! Não foi possivel cadastrar a Desenvolvedora');
			return redirect()->to(base_url('/desenvolvedora'));
		}

    }
}