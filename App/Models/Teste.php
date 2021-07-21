<?php

    namespace App\Models;
    use MF\Model\Model;
use PDOException;

class Teste extends Model{

        private $id;
        private $titulo;

        public function __get($attr){
            return $this->$attr;
        }
        public function __set($attr,$value){
            $this->$attr = $value;
        } 
        public function teste(){
            
            $query = "INSERT INTO teste(id,titulo) values (:id , :titulo);";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id', $this->__get('id'),\PDO::PARAM_INT);
            $stmt->bindValue(':titulo', $this->__get('titulo'));

            $stmt->execute();
               
                return $this;
          

            

            
        }
           
    }
    
    
    ?>