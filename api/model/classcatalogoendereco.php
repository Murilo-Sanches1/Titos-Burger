<?php

    class ClassCatalogoEndereco{
        private int $idCatalogoEndereco;
        private int $cep;
        private string $enderecoPrincipal;
        private string $logradouro;
        private int $numero;
        private string $complemento;
        private string $bairro;
        private string $cidade;
        private string $uf;

        public function setIdCatalogoEndereco(int $idCatalogoEndereco){
            return $this->idCatalogoEndereco = $idCatalogoEndereco;
        }
        public function getIdCatalogoEndereco(){
            return $this->idCatalogoEndereco;
        }
    
        public function setCep( int $cep){
            return $this->cep = $cep;
        }
        public function getCep(){
            return $this->cep;
        }
        
        public function setEnderecoPrincipal( String $enderecoPrincipal){
            return $this->enderecoPrincipal = $enderecoPrincipal;
        }
        public function getEnderecoPrincipal(){
            return $this->enderecoPrincipal;
        }

        public function setLogradouro(string $logradouro){
            return $this->logradouro = $logradouro;
        }
        public function getLogradouro(){
            return $this->logradouro;
        }

        public function setNumero(int $numero){
            return $this->numero = $numero;
        }
        public function getNumero(){
            return $this->numero;
        }

        public function setComplemento(string $complemento){
            return $this->complemento = $complemento;
        }
        public function getComplemento(){
            return $this->complemento;
        }

        public function setBairro(string $bairro){
            return $this->bairro = $bairro;
        }
        public function getBairro(){
            return $this->bairro;
        }
        
        public function setCidade(string $cidade){
            return $this->cidade = $cidade;
        }
        public function getCidade(){
            return $this->cidade;
        }

        public function setUf(string $uf){
            return $this->uf = $uf;
        }
        public function getUf(){
            return $this->uf;
        }
    }