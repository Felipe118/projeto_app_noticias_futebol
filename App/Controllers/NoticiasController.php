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
        $this->renderNoticias('cadastra_noticias_adm');
    } 
    
    public function alterar_index(){
   
      $this->renderNoticias('alterar_noticias_adm');
    }

    public function listarNoticias(){
      session_start();

      if($_SESSION['autenticado'] == false){
        header('Location: /'); 
      }
      $noticia = Container::getModel('Noticia');
      

      $noticia->__set('fk_id_funcionario',$_SESSION['id']);
      $noticias = $noticia->listar();
      $this->view->noticias = $noticias;
      $this->renderList('listar_noticias_adm');


    }
    
    public function cadastrarNoticia(){

      session_start();
        
      $noticias = Container::getModel('Noticia');
 
        
      $noticias->__set('titulo', $_POST["titulo"]);
      $noticias->__set('resumo', $_POST["resumo"]);
      $noticias->__set('imagem', $_POST["imagem"]);
      $noticias->__set('noticia', $_POST["noticia"]);
      $noticias->__set('fk_jornalista', $_SESSION['id'] );
        
      $noticias->cadastrar(); 
 

        header('Location: /cadastra_noticias_adm');
       $this->renderNoticias('cadastra_noticias');
      
} 
    //public function teste(){
     // session_start();
     // try{
 
     // $teste = Container::getModel('Teste');
    
       // $_POST['id'] = $_SESSION['id'];
       
     // $teste->__set('id', (integer)$_SESSION['id']);
     // var_dump($_SESSION['id']);
    
     // $teste->__set('titulo', $_POST["titulo"]);

      //if($teste->teste()){
       // $this->renderNoticias('cadastra_noticias');
     // }
     // }catch(\PDOException $e){
      //  echo 'ERRO'.$e->getMessage();
     // }
    //}


    public function alterarNoticia(){ 
     session_start();

     if($_SESSION['autenticado'] == false){
      header('Location: /'); 
    }
      
     $noticia = Container::getModel('Noticia');
     $id = (integer)$_GET['id'];
       
     $noticia->__set('id', $id);

      $noticias_edit = $noticia->listID();
      $this->view->noticiass = $noticias_edit; 
     
 
     
     
      $this->renderEdit('alterar_noticias_adm');
      
    }

    public function editNoticia(){
      $noticias = Container::getModel('Noticia');
      $id = (integer)$_GET['id'];
       
      $noticias->__set('id', $id);
      $noticias->__set('titulo', $_POST["titulo"]);
      $noticias->__set('resumo', $_POST["resumo"]);
      $noticias->__set('imagem', $_POST["imagem"]);
      $noticias->__set('noticia', $_POST["noticia"]);

      $noticias->edit();
      header('Location: /listar_noticias_adm?status=sucesso'); 

     // $this->renderNoticias('listar_noticias_adm');
    

    }

    //-------------------------------------------------------------------------
    
}