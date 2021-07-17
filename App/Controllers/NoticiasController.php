<?php 
   
   namespace App\Controllers;

   //os recursos do miniframework
   use MF\Controller\Action;
   use MF\Model\Container;

   class NoticiasController extends Action{
    public function cadastra_noticias(){
        $this->renderNoticias('cadastra_noticias');
    }
    public function cadastrar(){

        Container::getModel('Noticia');



        $this->renderNoticias('cadastra_noticias');
    }
}