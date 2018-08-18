<?php

namespace App\Controllers;

use Base\Controller\Controller;
//use Base\DI\Container;
use App\Models\PrincipalModel;

class PrincipalController extends Controller
{

	public function index()
	{
		$this->render("index");
	}

	public function backup()
	{
		$this->render("backup");
	}

	public function executa()
	{
		// Cria um objeto
		$executa = new PrincipalModel();

		// Variaveis dos campos vindo do formulário
		$opcao 				= $_POST['opcao'];
		$caminho 			= $_POST['caminhoBackup'];
		$caminhoBinMysql 	= $_POST['caminhoMysql'];
		$host 				= $_POST['host'];
		$user 				= $_POST['user'];
		$port 				= $_POST['port'];
		$pass 				= $_POST['pass'];
		$banco 				= $_POST['banco'];

		if ($opcao == '1') {
			$backup = $executa->executaTradicional($caminho,$host,$user,$port,$pass,$banco);
		} else if ($opcao == '2') {
			$backup = $executa->executaDinamico($caminho,$caminhoBinMysql,$host,$user,$port,$pass,$banco);
		}
		
		if ($backup) {
			json_encode($backup);
		} else {
			json_encode($backup);
		}
	}

	public function Restaura()
	{
		// Cria um objeto
		$restaura = new PrincipalModel();

		// Variaveis dos campos vindo do formulário
		$caminho 			= $_POST['caminhoBackup'];
		$caminhoBinMysql 	= $_POST['caminhoMysql'];
		$host 				= $_POST['host'];
		$user 				= $_POST['user'];
		$port 				= $_POST['port'];
		$pass 				= $_POST['pass'];
		$banco 				= $_POST['banco'];

		$restauraBackup = $restaura->RestauraBackup($caminho,$caminhoBinMysql,$host,$user,$port,$pass,$banco);

		if ($restauraBackup) {
			json_decode($restauraBackup);
		} else {
			json_decode($restauraBackup);
		}
	}
}
