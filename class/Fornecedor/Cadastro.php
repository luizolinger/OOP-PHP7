<?php 

namespace Fornecedor;

class Cadastro extends \Cadastro {

	public function registrarCompra() {
		echo 'Foi registrado uma compra do fornecedor ' . $this->getNome();
	}

}

 ?>