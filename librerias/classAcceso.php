<?php
    class acceso{
        private $usuario;
        private $clave; 

        public function setUsuario($usuario){
            $this->usuario= $usuario;
        }
        public function getUsuario(){
            return $this->usuario;
        }

        public function setClave($clave){
            $this->clave= $clave;
        }
        public function getClave(){
            return $this->clave;
        }
    }

?>