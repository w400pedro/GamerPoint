<?php
namespace App\Controllers;
use App\Models\UsersModel;


class userController extends BaseController {
    public function showCadastro()
    {
        return view('insertUser');
    }

    public function cadastrarusuario(){
		$rules = [
            'nome' => 'required',
            'email' => 'required'
        ];
		$user_model = new UsersModel();

		if ($this->validate($rules)){
			$data = array(
                'nome' => $this->request->getVar('nome'),
                'email' => $this->request->getVar('email')
			);
			$user_model->insert_user($data);
			$this->session->setFlashdata('msg', 'Usuário Cadastrado com sucesso'); //Envia mensagem para o view
 			return redirect()->to(base_url('/'));	 
		}else{
			$this->session->setFlashdata('msg', 'Ops! Não foi possivel cadastrar o usuário');
			return redirect()->to(base_url('/'));
					
		}
	}

}
?>