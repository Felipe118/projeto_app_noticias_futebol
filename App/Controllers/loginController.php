<?php
    namespace App\Controllers;

    //os recursos do miniframework
    use MF\Controller\Action;
    use MF\Model\Container;

    class loginController extends Action{
 
        public function login(){
       
 
            $this->render_login('login');
        } 
        public function autenticar(){ 

            $funcionario = Container::getModel('Funcionario');
             

             $funcionario->__set('email',$_POST['email']);
             $funcionario->__set('senha',$_POST['senha']);
             $funcionario->autenticar(); 

             if($funcionario->__get('id') !='' && $funcionario->__get('nome') != ''){
                 echo "Autenticado";
                 session_start();

                 $_SESSION['id'] = $funcionario->__get('id');
                 $_SESSION['nome'] = $funcionario->__get('nome');
                 $_SESSION['autenticado'] = true;
                
                header('Location: /home');
             
            }
            
            else{
               
                header('Location: /login?login=erro');
            }

             
             
        }

        public function sair(){
            session_start();
            session_destroy();
            header('Location: /');
        }
    

    }
?>