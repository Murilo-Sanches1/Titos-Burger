<?php

    class ClassPermissaoUsuario{
        private string $modulo;
        private string $tipoPermissao;

        public function setModulo(string $modulo){
            return $this->modulo = $modulo;
        }
        public function getModulo(){
            return $this->modulo;
        }

        public function setTipoPermissao( string $tipoPermissao){
            return $this->tipoPermissao = $tipoPermissao;
        }
        public function getTipoPermissao(){
            return $this->tipoPermissao;
        }
    }