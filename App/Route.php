<<<<<<< HEAD
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
		$routes['home_adm'] = array(
			'route' => '/home_adm',
			'controller' => 'homeController',
			'action' => 'home_adm'
		);
		$routes['sair'] = array(
			'route' => '/sair',
			'controller' => 'loginController',
			'action' => 'sair'
		);
		

		$this->setRoutes($routes);
	}

}

=======
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
		$routes['home_adm'] = array(
			'route' => '/home_adm',
			'controller' => 'homeController',
			'action' => 'home_adm'
		);
		$routes['sair'] = array(
			'route' => '/sair',
			'controller' => 'loginController',
			'action' => 'sair'
		);
		$routes['cadastrar'] = array(
			'route' => '/cadastrar_noticias',
			'controller' => 'noticiasController',
			'action' => 'insert'
		);
		
		

		$this->setRoutes($routes);
	}

}

>>>>>>> e162ad5c20c160202d27bbd980f667c0f5adf1e1
?>