<?php

namespace App;
 
use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() { 

		$routes['index'] = array(
			'route' => '/',
			'controller' => 'IndexController',
			'action' => 'index' 
		);
		$routes['login'] = array(
			'route' => '/login',
			'controller' => 'LoginController',
			'action' => 'login'
		);
		$routes['autenticar'] = array(
			'route' => '/autenticar',
			'controller' => 'LoginController',
			'action' => 'autenticar'
		);

		$routes['home'] = array(
			'route' => '/home',
			'controller' => 'homeController',
			'action' => 'home'
		);
		$routes['home_adm'] = array(
			'route' => '/home_adm',
			'controller' => 'HomeController',
			'action' => 'home_adm'
		);
		$routes['sair'] = array(
			'route' => '/sair',
			'controller' => 'LoginController',
			'action' => 'sair'
		);
		$routes['cadastrar'] = array(
			'route' => '/cadastra_noticias',
			'controller' => 'NoticiasController',
			'action' => 'cadastra_noticias'
		);
		$routes['cadastrarNoticia'] = array(
			'route' => '/cadastrarNoticia',
			'controller' => 'NoticiasController',
			'action' => 'cadastrar'
		);
		
		 

		$this->setRoutes($routes);
	}

}


?>