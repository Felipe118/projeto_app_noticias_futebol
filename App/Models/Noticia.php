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
        private $idFuncionario;


        public function __get($attr){
            return $this->$attr;
        }
        public function __set($attr,$value){
            $this->$attr = $value;
        }

        public function cadastrar(){

        }
    }



?>