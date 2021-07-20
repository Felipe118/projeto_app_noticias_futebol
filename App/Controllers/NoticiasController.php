<?php 
   
   namespace App\Controllers;

   //os recursos do miniframework
   use MF\Controller\Action;
   use MF\Model\Container;

   class NoticiasController extends Action{
    public function cadastra_noticias(){
        session_start();

        if($_SESSION['autenticado'] == false){
          header('Location: /'); 
        }
        $this->renderNoticias('cadastra_noticias');
    } 
    
    public function cadastrar(){

       // $this->validaAutenticacao();
      
     

        $noticias = Container::getModel('Noticia');
     
       $noticias->__set('titulo', $_POST['titulo']);
       $noticias->__set('resumo', $_POST['resumo']);
       $noticias->__set('texto', $_POST['texto']);
        $noticias->__set('imagem', $_POST['imagem']);
       $noticias->__set('autor', $_POST['autor']);
      
        $noticias->__set('fk_id_funcionario', $_SESSION['id']);

        

        $noticias->cadastrar();

        


        $this->renderNoticias('cadastra_noticias');
    }

    public function validaAutenticacao() {

		session_start();

		//if($_SESSION['id'] == '' && $_SESSION['nome'] == '') {
			//header('Location: /?login=erro2');
		//}	

       
	}

}