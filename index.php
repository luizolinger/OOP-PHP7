<?php 

require_once('config.php');

/*
use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome('Luiz Otávio');
$cad->setEmail('luizotaviom@gmail.com.br');
$cad->setSenha('abc123');

$cad->registrarVenda();
// echo $cad;
*/

echo Cadastro::versao();

use Fornecedor\Cadastro;

$cad = new Cadastro();

$cad->setNome('Luiz Otávio');
$cad->setEmail('luizotaviom@gmail.com.br');
$cad->setSenha('abc123');


$cad->registrarCompra();

 ?>