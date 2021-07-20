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
        $funcionario = Container::getModel('Funcionario');

        $noticias = Container::getModel('Noticia');

        $noticias->__set('titulo',$_POST['titulo']);
        $noticias->__set('resumo',$_POST['resumo']);
        $noticias->__set('texto',$_POST['texto']);
        $noticias->__set('imagem',$_POST['imagem']);
        $noticias->__set('autor',$_POST['autor']);
        session_start();
        $idFuncionario = $_SESSION['id'] = $funcionario->__get('id');
        $noticias->__set('fk_id_funcionario', $idFuncionario);

        $noticias->cadastrar();

        


        $this->renderNoticias('cadastra_noticias');
    }
}