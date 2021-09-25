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
    public function CadastrarNoticiaJornalistaView(){
      session_start();

      if($_SESSION['autenticado'] == false){
        header('Location: /'); 
      }
      $this->renderNoticiasJornalista('cadastra_noticias');
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
      
      $fk_jornalista = (integer)$_SESSION['id'];
      $noticia->__set('fk_jornalista',$fk_jornalista);
    //  var_dump($_SESSION['id']);
      $noticias = $noticia->listar();
      $this->view->noticias = $noticias;
      $this->renderList('listar_noticias_adm');


    }

    public function listarNoticiasJornalista(){
      
      session_start();

      if($_SESSION['autenticado'] == false){
        header('Location: /'); 
      }
      $noticia = Container::getModel('Noticia');
      
      $fk_jornalista = (integer)$_SESSION['id'];
      $noticia->__set('fk_jornalista',$fk_jornalista);
    //  var_dump($_SESSION['id']);
      $noticias = $noticia->listar();
      $this->view->noticias = $noticias;
      $this->renderList('listar_noticias');


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
  public function CadastrarNoticiaJornalista(){
    session_start();
        
    $noticias = Container::getModel('Noticia');

    
    $noticias->__set('titulo', $_POST["titulo"]);
    $noticias->__set('resumo', $_POST["resumo"]);
    $noticias->__set('imagem', $_POST["imagem"]);
    $noticias->__set('noticia', $_POST["noticia"]);
    $noticias->__set('fk_jornalista', $_SESSION['id'] );
    
    $noticias->cadastrar(); 


    header('Location: /listar_noticias');
   //$this->renderNoticias('listar_noticias');
}
    


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

    public function alterarNoticiaJornalista(){ 
      session_start();
 
      if($_SESSION['autenticado'] == false){ 
       header('Location: /'); 
     }
       
      $noticia = Container::getModel('Noticia');
      $id = (integer)$_GET['id'];
      $noticia->__set('id', $id);
      $noticias_edit = $noticia->listID();

      foreach($noticias_edit as $noticias){
 
        if($noticias['fk_jornalista'] != $_SESSION['id']){
          header('Location:listar_noticias?error=id ');
        }
      }
      $this->view->noticiasJornalista = $noticias_edit; 
      $this->renderEdit('alterar_noticia');
       
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
      //header('Location: /listar_noticias_adm?status=sucesso'); 

     $this->renderNoticias('listar_noticias_adm');
    

    } 

    public function EditNoticiaJornalista(){
      $noticias = Container::getModel('Noticia');
      $id = (integer)$_GET['id'];
       
      $noticias->__set('id', $id);
      $noticias->__set('titulo', $_POST["titulo"]);
      $noticias->__set('resumo', $_POST["resumo"]);
      $noticias->__set('imagem', $_POST["imagem"]);
      $noticias->__set('noticia', $_POST["noticia"]);

      $noticias->edit();
      header('Location: /listar_noticias'); 

      //$this->renderNoticias('listar_noticias');
    }

    public function delete(){
      //print_r($_POST);
      $noticias = Container::getModel('Noticia');

      $id = (integer)$_POST['id'];
      $noticias->__set('id',$id);
      $noticias->delete();


      header('Location: /listar_noticias?delete=sucesso'); 



    }

    //-------------------------------------------------------------------------
    
}  