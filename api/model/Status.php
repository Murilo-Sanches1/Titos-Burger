<?php

    class Status{
        private int $idStatus;
        private string $status;
        
        public function setIdStatus(int $idStatus){
            return $this->idStatus = $idStatus;
        }
        
        public function getIdStatus(){
            return $this->idStatus;
        }
        
        public function setStatus( string $status){
            return $this->status = $status;
        }
        
        public function getStatus(){
            return $this->status;
        }
    }