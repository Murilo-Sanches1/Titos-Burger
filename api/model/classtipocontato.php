<?php

    class ClassTipoContato{
        private string $idTipoContato;
        private int $tipoContato;

        public function setIdTipoContato(string $idTipoContato){
            return $this->idTipoContato = $idTipoContato;
        }
        public function getIdTipoContato(){
            return $this->idTipoContato;
        }

        public function setTipoContato( int $tipoContato){
            return $this->tipoContato = $tipoContato;
        }
        public function getTipoContato(){
            return $this->tipoContato;
        }
    }
