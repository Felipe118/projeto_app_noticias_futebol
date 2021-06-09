<?php

namespace App;
 
use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);
		$routes['login'] = array(
			'route' => '/login',
			'controller' => 'loginController',
			'action' => 'login'
		);
		$routes['autenticar'] = array(
			'route' => '/autenticar',
			'controller' => 'loginController',
			'action' => 'autenticar'
		);

		$routes['sobre_nos'] = array(
			'route' => '/sobre_nos',
			'controller' => 'indexController',
			'action' => 'sobreNos'
		);

		$this->setRoutes($routes);
	}

}

?>