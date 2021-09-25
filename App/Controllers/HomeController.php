<?php 
   
   namespace App\Controllers;  

   //os recursos do miniframework
   use MF\Controller\Action;
   use MF\Model\Container; 
   use MF\Model\Model\Noticia;
   
 
   class HomeController extends Action{ 
    public function home(){


        session_start(); 

       if($_SESSION['autenticado'] == false){
          header('Location: /'); 
        }
        $this->renderHome('home');


        $noticia = Container::getModel('Noticia');

    }
    public function home_adm(){

      session_start();

      if($_SESSION['autenticado'] == false || $_SESSION['permissao'] == 'usu'){
        header('Location: /?erro=autenticacao');
      }
      $this->renderHome('home_adm');
  }
}
