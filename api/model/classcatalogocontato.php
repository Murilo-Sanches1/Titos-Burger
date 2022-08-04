<?php

    class ClassCatalogoContato{
        private string $idCatalogoContato;
        private int $contato;

        public function setContato(string $contato){
            return $this->contato = $contato;
        }
        public function getContato(){
            return $this->contato;
        }
        
        public function setIdCatalogoContato( int $idCatalogoContato){
            return $this->idCatalogoContato = $idCatalogoContato;
        }
        public function getIdContato(){
            return $this->idCatalogoContato;
        }
    }