<?php

    namespace App\Models;
    use MF\Model\Model;
use PDOException;

class Noticia extends Model{
        private $id;
        private $titulo;
        private $resumo;
        private $noticia; 
        private $imagem;
        private $fk_jornalista;
      
 
  
        public function __get($attr){
            return $this->$attr;
        }
        
        public function __set($attr,$value){
            $this->$attr = $value;
        } 

        public function cadastrar(){

            $query = "INSERT INTO noticias(titulo,resumo,imagem,noticia,fk_jornalista) values(:titulo ,:resumo,:imagem,:noticia,:fk_jornalista);";

            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':titulo', $this->__get('titulo'));
            $stmt->bindValue(':resumo', $this->__get('resumo'));
            $stmt->bindValue(':imagem', $this->__get('imagem'));
            $stmt->bindValue(':noticia', $this->__get('noticia'));
            $stmt->bindValue(':fk_jornalista',$this->__get('fk_jornalista'));
       
           $stmt->execute(); 

            //$stmt->rowCount();
           
         

           return $this;
        
        }

       public function listar(){
            $query = "SELECT id,titulo,resumo,imagem,noticia,fk_jornalista from noticias where :fk_jornalista = fk_jornalista";
            $stmt= $this->db->prepare($query);
            $stmt->bindValue(':fk_jornalista',$this->__get('fk_jornalista'));

            $stmt->execute();

            return  $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }
        
        public function listID(){
            $query = "SELECT id,titulo,resumo,imagem,noticia,fk_jornalista from noticias where id = :id";
            $stmt= $this->db->prepare($query);
            $stmt->bindValue(':id',$this->__get('id'));

            $stmt->execute();

            return  $stmt->fetchAll(\PDO::FETCH_ASSOC);
      }

      public function listarHome(){
          $query = "SELECT titulo,resumo,noticia,imagem,data_postagem FROM noticias";
          $stmt= $this->db->prepare($query);
          $stmt->execute();
          
          return  $stmt->fetchAll(\PDO::FETCH_ASSOC);
      }
  

        public function edit(){

            try{
            $query = "UPDATE noticias set titulo = :titulo, resumo = :resumo,imagem = :imagem, noticia = :noticia where id = :id";
            $stmt= $this->db->prepare($query);

            $stmt->bindValue(':id',$this->__get('id'));
            $stmt->bindValue(':titulo',$this->__get('titulo'));
            $stmt->bindValue(':resumo',$this->__get('resumo'));
            $stmt->bindValue(':imagem',$this->__get('imagem'));
            $stmt->bindValue(':noticia',$this->__get('noticia'));
            
            $stmt->execute();
        }catch(PDOException $e){
            echo 'ERRO:'. $e->getMessage();
        }

            return $this;

        }

        public function delete(){
            $query = "DELETE FROM noticias where id = :id";
            $stmt = $this->db->prepare($query);

            $stmt->bindValue(':id', $this->__get('id'));

            $stmt->execute();
        }

          
        
        
        
        }
        
           
     

           

        
    



?>