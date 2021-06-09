<?php 
   namespace App\Controllers;

   //os recursos do miniframework
   use MF\Controller\Action;
   use MF\Model\Container;

   class homeController extends Action{
    public function home(){
        $this->renderHome('home');
    }
}
?>