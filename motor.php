<?php

	class Motor {
    
        public $modelo;
        public $id;
        public $potencia;
        
        function setModelo($model){
            $this->modelo = $model;
        }

        function getModelo(){
            return $this->modelo;
        }

        function setPotencia($potencia){
            $this->potencia = $potencia;
        }

        function getPotencia(){
            return $this->potencia;
        }
    }


?>