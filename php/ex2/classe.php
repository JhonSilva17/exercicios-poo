<?php

    class Empregado {
        private $nome;
        private $sobrenome;
        private $salarioMensal;

        // Métodos
        public function salarioAnual() {
            $salarioAnual = $this -> getSalarioMensal() * 12;
            return  $salarioAnual;
        }

        public function aumento() {
            $aumento =( $this -> getSalarioMensal() * 10) / 100;
            $salarioFinal = $this -> getSalarioMensal() + $aumento;
            return $salarioFinal + $this -> salarioAnual();
        }

        // Métodos especiais
        public function __construct($nome, $sobrenome, $salarioMensal) {
            $this -> setNome($nome);
            $this -> setSobrenome($sobrenome);
            $this -> setSalarioMensal($salarioMensal);
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
    
        public function getSobrenome(){
            return $this->sobrenome;
        }  
        public function setSobrenome($sobrenome){
            $this->sobrenome = $sobrenome;
        }
    
        public function getSalarioMensal(){
            return $this->salarioMensal;
        }
    
        public function setSalarioMensal($salarioMensal){
            if ($salarioMensal < 0) {
                $this->salarioMensal = 0.0;
            } else {
                $this->salarioMensal = $salarioMensal;
            }
        }
    }