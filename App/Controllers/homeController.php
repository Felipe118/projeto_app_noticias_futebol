<?php 
   namespace App\Controllers;

   //os recursos do miniframework
   use MF\Controller\Action;
   use MF\Model\Container;

   class homeController extends Action{
    public function home(){

        session_start();

        if($_SESSION['autenticado'] == false){
          header('Location: /');
        }
        $this->renderHome('home');
    }
    public function home_adm(){

      session_start();

      if($_SESSION['autenticado'] == false){
        header('Location: /');
      }
      $this->renderHome('home_adm');
  }
}
?>