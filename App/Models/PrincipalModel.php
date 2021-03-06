<?php

namespace App\Models;

use PDO;

class PrincipalModel
{
	/**
	 * [executaTradicional - Função para o backup tradicional]
	 * @param [type] $caminho         [caminho da pasta que se encontra o backup]
	 * @param [type] $host            [Host ou IP que se encontra o MySQL]
	 * @param [type] $user            [Usuário do MySQL]
	 * @param [type] $port            [Porta do MySQL]
	 * @param [type] $pass            [Senha do MySQL]
	 * @param [type] $banco           [Banco de dados (Instância) que será feita a restauração]
	 */
	public function executaTradicional($caminho,$host,$user,$port,$pass,$banco)
	{
		$db = new PDO('mysql:host='.$host.':'.$port.';dbname='.$banco,$user,$pass);
		
		if (file_exists($caminho)) {
			return true;
		} else {
			mkdir($caminho,0777,true);
		}

		$file = fopen($caminho."/".$banco.'.sql','wt');

		$triggers = $db->query('SHOW TRIGGERS');

		foreach ($triggers as $trigger) {
			$sql = '-- Trigger: '.$trigger[0].PHP_EOL;
			$create = $db->query('SHOW CREATE TRIGGER `'.$trigger[0].'`')->fetch();
			$sql .= $create['SQL Original Statement'].';'.PHP_EOL;

			fwrite($file,$sql);
		}

		$table = $db->query('SHOW TABLES');

		foreach ($table as $tables) {
			$sql = '-- Table: '.$tables[0].PHP_EOL;
			$create = $db->query('SHOW CREATE TABLE `'.$tables[0].'`')->fetch();
			$sql .= $create['Create Table'].';'.PHP_EOL;
			fwrite($file, $sql);

			$rows = $db->query('SELECT * FROM `'.$tables[0].'`');
			$rows->setFetchMode(PDO::FETCH_ASSOC);
			
			foreach ($rows as $row) {
				$row = array_map(array($db, 'quote'), $row);
				$sql = 'INSERT INTO `'.$tables[0].'`(`'.implode('`, `',array_keys($row)).'`) VALUES('.utf8_encode(implode(', ', $row)).');' . PHP_EOL;

				fwrite($file, $sql);
			}

			$sql = PHP_EOL;
			$resultado = fwrite($file, $sql);
		}

		if ($resultado != false) {
			return true;
		} else {
			return false;
		}

		flush();

		fclose($file);
	}

	/**
	 * [executaDinamico - Função para o backup dinâmico]
	 * @param [type] $caminho         [caminho da pasta que se encontra o backup]
	 * @param [type] $caminhoBinMysql [caminho da pasta bin do MySQL]
	 * @param [type] $host            [Host ou IP que se encontra o MySQL]
	 * @param [type] $user            [Usuário do MySQL]
	 * @param [type] $port            [Porta do MySQL]
	 * @param [type] $pass            [Senha do MySQL]
	 * @param [type] $banco           [Banco de dados (Instância) que será feita a restauração]
	 */
	public function executaDinamico($caminho,$caminhoBinMysql,$host,$user,$port,$pass,$banco)
	{
		if (file_exists($caminho)) {
			return true;
		} else {
			mkdir($caminho,0777,true);
		}

		system($caminhoBinMysql.'/mysqldump.exe -h'.$host.' -u'. $user.' -P'.$port.' -p'.$pass.' '.$banco.' > '.$caminho.'/'.$banco.'.sql');
	}

	/**
	 * [RestauraBackup - Função para restaurar backup]
	 * @param [type] $caminho         [caminho da pasta que se encontra o backup]
	 * @param [type] $caminhoBinMysql [caminho da pasta bin do MySQL]
	 * @param [type] $host            [Host ou IP que se encontra o MySQL]
	 * @param [type] $user            [Usuário do MySQL]
	 * @param [type] $port            [Porta do MySQL]
	 * @param [type] $pass            [Senha do MySQL]
	 * @param [type] $banco           [Banco de dados (Instância) que será feita a restauração]
	 */
	public function RestauraBackup($caminho,$caminhoBinMysql,$host,$user,$port,$pass,$banco) {
		system($caminhoBinMysql.'/mysql.exe -h'.$host.' -u'.$user.' -P'.$port.' -p'.$pass.' '.$banco.' < '.$caminho.'/'.$banco.'.sql');
	}
}
