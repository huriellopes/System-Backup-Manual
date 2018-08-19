<?php

namespace App;

use Base\Init\Bootstrap;

class Route extends Bootstrap
{

	protected function initRoutes()
	{
		$route['home'] = array(
			'route' 		=> '/',
			'controller' 	=> 'PrincipalController',
			'action'		=> 'index'
		);

		$route['backup'] = array(
			'route'			=> '/backup',
			'controller'	=> 'PrincipalController',
			'action'		=> 'backup'
		);

		$route['restaura'] = array(
			'route'			=> '/restaura',
			'controller'	=> 'PrincipalController',
			'action'		=> 'Restaura'
		);

		$route['restaurabackup'] = array(
			'route'			=> '/restaurabackup',
			'controller'	=> 'PrincipalController',
			'action'		=> 'RestauraBackup'
		);

		$route['executa'] = array(
			'route'			=> 	'/executa',
			'controller'	=>	'PrincipalController',
			'action'		=>  'executa'
		);

		$this->setRoutes($route);
	}
}
