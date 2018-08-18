<?php

namespace Base\Database;

use PDO;

class Database
{
	public static function getDb()
	{
		$config = require __DIR__ . "/../../../App/Config/config.php";

		try {
			$pdo = new PDO("mysql:host={$config['db']['host']};dbname={$config['db']['dbname']};charset={$config['db']['charset']}", $config['db']['username'], $config['db']['password']);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			return $pdo;
		} catch (PDOException $e) {
			echo $e->getMessage();
			exit();
		}
	}
}

