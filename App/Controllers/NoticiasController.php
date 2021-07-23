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
     
    public function cadastrarNoticia(){

      session_start();
        
      $noticias = Container::getModel('Noticia');

        
       $noticias->__set('titulo', $_POST["titulo"]);
       $noticias->__set('resumo', $_POST["resumo"]);
       $noticias->__set('texto', $_POST["texto"]);
       $noticias->__set('imagem', $_POST["imagem"]);
       $noticias->__set('autor', $_POST["autor"]);
       $noticias->__set('fk_id_funcionario', $_SESSION['id'] );
       
         $noticias->cadastrar();


        header('Location: /cadastrarNoticia?inserir=1');
        //$this->renderNoticias('cadastra_noticias');
      
} 
    public function teste(){
      session_start();
      try{


     
      $teste = Container::getModel('Teste');
    
       // $_POST['id'] = $_SESSION['id'];
       
      $teste->__set('id', (integer)$_SESSION['id']);
      var_dump($_SESSION['id']);
    
      $teste->__set('titulo', $_POST["titulo"]);

      if($teste->teste()){
        $this->renderNoticias('cadastra_noticias');
      }
      }catch(\PDOException $e){
        echo 'ERRO'.$e->getMessage();
      }
    }
}