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

		$route['executa'] = array(
			'route'			=> 	'/executa',
			'controller'	=>	'PrincipalController',
			'action'		=>  'executa'
		);

		$this->setRoutes($route);
	}
}
