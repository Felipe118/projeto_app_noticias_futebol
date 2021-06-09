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
             //echo "<pre>";
             //print_r($_POST);
             //echo "<pre>";

             $funcionario->__set('email',$_POST['email']);
             $funcionario->__set('senha',$_POST['senha']);
             $funcionario->autenticar();

             if($funcionario->__get('id') !='' && $funcionario->__get('nome') != ''){
                 echo "Autenticado";
                 session_start();

                 $_SESSION['id'] = $funcionario->__get('id');
                 $_SESSION['nome'] = $funcionario->__get('nome');

                header('Location: /home');
                //echo "<script>alert('Entrou')</script>";
            }else{
                header('Location: /?login=erro');
            }
        }
        public function home(){
       
 
            $this->render_login('home');
        }

    }
?>