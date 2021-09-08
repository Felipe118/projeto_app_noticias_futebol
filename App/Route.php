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
			'route' => '/cadastra_noticias_adm',
			'controller' => 'NoticiasController',
			'action' => 'cadastra_noticias'
		);
		
		$routes['alterarIndex'] = array(
			'route' => '/alterar_index',
			'controller' => 'NoticiasController',
			'action' => 'alterar_index'
		);
		$routes['listar_noticias'] = array(
			'route' => '/listar_noticias_adm',
			'controller' => 'NoticiasController',
			'action' => 'listarNoticias'
		);
		$routes['cadastrarNoticia'] = array(
			'route' => '/cadastrarNoticia',
			'controller' => 'NoticiasController',
			'action' => 'cadastrarNoticia'
		);
		$routes['teste'] = array(
			'route' => '/teste',
			'controller' => 'NoticiasController',
			'action' => 'teste'
		);
		
		 

		$this->setRoutes($routes);
	}

}


?>