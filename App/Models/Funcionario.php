<?php
namespace App\Models;
    class Funcionario{

        private $email;
        private $senha; 
        private $nome;

        public function __get($attr){
            return $this->$attr;
        }
        public function __set($attr,$value){
            $this->$attr = $value;
        }

        public function autenticar(){
             $query = "SELECT id,email,senha,nome FROM tb_funcionarios WHERE email = :email AND senha = :senha";
             $stmt = $this->db->prepare($query);
             $stmt->bindValue(':email', $this->__get('email'));
             $stmt->bindValue(':senha',$this->__get('senha'));
             $stmt->execute();

             $funcionario = $stmt->fetch(\PDO::FETCH_ASSOC);

             if($funcionario['id'] != '' && $funcionario['nome'] != ''){
                 $this->__set('id', $funcionario['id']);
                 $this->__set('nome', $funcionario['nome']);
             }
             return $this;
        }
     



    }
?>