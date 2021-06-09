<?php

namespace App;
 
use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['index'] = array(
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

		$routes['home'] = array(
			'route' => '/home',
			'controller' => 'homeController',
			'action' => 'home'
		);
		$routes['sair'] = array(
			'route' => '/sair',
			'controller' => 'sairController',
			'action' => 'sair'
		);

		$this->setRoutes($routes);
	}

}

?>