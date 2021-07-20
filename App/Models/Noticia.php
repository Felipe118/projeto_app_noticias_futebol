<?php

    namespace App\Models;
    use MF\Model\Model;

    class Noticia extends Model{
        private $id;
        private $titulo;
        private $resumo;
        private $texto;
        private $imagem;
        private $autor;
        private $fk_id_funcionario;

 
        public function __get($attr){
            return $this->$attr;
        }
        public function __set($attr,$value){
            $this->$attr = $value;
        }

        public function cadastrar(){

         

            $query = "INSERT INTO tb_noticias(titulo,resumo,texto,imagem,autor,fk_id_funcionario) values(:titlo , :resumo, :texto, :imagem, :autor, :fk_id_funcionario)";

            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':titulo', $this->__get('titulo'));
            $stmt->bindValue(':resumo', $this->__get('resumo'));
            $stmt->bindValue(':texto', $this->__get('texto'));
            $stmt->bindValue(':imagem', $this->__get('imagem'));
            $stmt->bindValue(':autor', $this->__get('autor'));
            $stmt->bindValue(':fk_id_funcionario',$this->__get('fk_id_funcionario'));
       
           $stmt->execute();

           return $this;
           
          
           
         
              
           }
        
        
        
        }
        
           
     

           

        
    



?>