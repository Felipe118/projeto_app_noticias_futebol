<<<<<<< HEAD
<?php
namespace App\Models;

    use MF\Model\Model;

    class Funcionario extends Model{

        private $id;
        private $email;
        private $senha; 
        private $permissao;
        private $nome;

        public function __get($attr){
            return $this->$attr;
        }
        public function __set($attr,$value){
            $this->$attr = $value;
        }

        public function autenticar(){
             $query = "SELECT id,email,senha,nome,permissao FROM tb_funcionarios WHERE  email = :email AND senha = :senha";
             $stmt = $this->db->prepare($query);
             $stmt->bindValue(':email', $this->__get('email'));
             $stmt->bindValue(':senha',$this->__get('senha'));
            
             $stmt->execute();

             $funcionario = $stmt->fetch(\PDO::FETCH_ASSOC);

             

             if($funcionario['id'] != '' && $funcionario['nome'] != '' && $funcionario['permissao'] != ''){
                $this->__set('id', $funcionario['id']);
                 $this->__set('nome', $funcionario['nome']);
                 $this->__set('permissao', $funcionario['permissao']);
             }
             return $this;
        }
     



    }
=======
<?php
namespace App\Models;

    use MF\Model\Model;

    class Funcionario extends Model{

        private $id;
        private $email;
        private $senha; 
        private $permissao;
        private $nome;

        public function __get($attr){
            return $this->$attr;
        }
        public function __set($attr,$value){
            $this->$attr = $value;
        }

        public function autenticar(){
             $query = "SELECT id,email,senha,nome,permissao FROM tb_funcionarios WHERE  email = :email AND senha = :senha";
             $stmt = $this->db->prepare($query);
             $stmt->bindValue(':email', $this->__get('email'));
             $stmt->bindValue(':senha',$this->__get('senha'));
            
             $stmt->execute();

             $funcionario = $stmt->fetch(\PDO::FETCH_ASSOC);

             
 
             if($funcionario['id'] != '' && $funcionario['nome'] != '' && $funcionario['permissao'] != ''){
                $this->__set('id', $funcionario['id']);
                 $this->__set('nome', $funcionario['nome']);
                 $this->__set('permissao', $funcionario['permissao']);
             }
             return $this;
        }
     



    }
>>>>>>> e162ad5c20c160202d27bbd980f667c0f5adf1e1
?>