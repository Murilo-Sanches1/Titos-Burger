<?php

    class TypeUsers{
        private int $idTypeUser
        private string $typeUser

        public function setIdTypeUser(int $idTypeUser){
            return $this->idTypeUser = $idTypeUser;
        }
        public function getIdTypeUser(){
            return $this->idtypeUser;
        }
        
        public function setTypeUser( string $typeUser){
            return $this->typeUser = $typeUser;
        }
        public function getTypeUser(){
            return $this->typeUser;
        }
    }