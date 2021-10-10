<?php

    class Pessoa {
        private $nome;

        public function __construct($name) {
            $this -> setNome($name);
        }

        public function setNome($nome) {
            $this -> nome = $nome;
        }
        public function getNome() {
            return $this -> nome;
        }
    }

    class Aluno extends Pessoa {
        private $anoEscolarAtual;
        private $qualCurso;

        // Métodos especiais
        public function __construct($anoAtual, $curso) {
            $this -> setAnoEscolarAtual($anoAtual);
            $this -> setQualCurso($curso);
        }

        public function getAnoEscolarAtual(){
            return $this->anoEscolarAtual;
        }
        public function setAnoEscolarAtual($anoEscolarAtual){
            $this->anoEscolarAtual = $anoEscolarAtual;
        }
    
        public function getQualCurso(){
            return $this->qualCurso;
        }
        public function setQualCurso($qualCurso){
            $this->qualCurso = $qualCurso;
        }
    }

    class Professor extends Pessoa {
        private $materiaEnsina;

        // Métodos 
        public function __construct($materiaEnsina) {
             $this -> setMateriaEnsina($materiaEnsina);
        }

        public function getMateriaEnsina(){
            return $this->materiaEnsina;
        }
        public function setMateriaEnsina($materiaEnsina){
            $this->materiaEnsina = $materiaEnsina;
        }
    }