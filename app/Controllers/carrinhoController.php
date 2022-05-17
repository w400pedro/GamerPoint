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
            'comprar' => 'required'
        ];
		$carrinho_model = new CarrinhoModel();

        
        $compras = $this->request->getVar('comprar');
        

        if($compras){
foreach ($compras as $itens) {
        if ($this->validate($rules)){
			$data = array(
                'item' => $itens,
                'usuario' => $this->request->getVar('usuario')
			);
			$carrinho_model->insert_carrinho($data);
		}else{
			$this->session->setFlashdata('msg', 'Ops! Não foi possivel comprar os itens');
			return redirect()->to(base_url('/itens'));
		}
   }
   $this->session->setFlashdata('msg', 'Itens Comprados com sucesso');
   return redirect()->to(base_url('/itens'));	 
}else{
        $this->session->setFlashdata('msg', 'Ops! Não foi possivel comprar os itens');
        return redirect()->to(base_url('/itens'));
    }
}
}