<?php 

class Cadastro {

	private $nome;
	private $email;
	private $senha;

	public function __construct() {
		
	}

	public function __toString():string {
		return json_encode(array(
			'nome' => $this->nome,
			'email' => $this->email,
			'senha' => $this->senha
		));
	}

	public static function versao():string {
		return '1.0';
	}

	public function getNome():string {
		return $this->nome;
	}

	public function getEmail():string {
		return $this->email;
	}

	public function getSenha():string {
		return $this->senha;
	}

	public function setNome($nome):bool {
		$this->nome = $nome;
		return true;
	}

	public function setEmail($email):bool {
		$this->email = $email;
		return true;
	}

	public function setSenha($senha):bool {
		$this->senha = $senha;
		return true;
	}

}

 ?>