<?php   

    class Contador {
        private $contagem;

        // Métodos
        public function zerar() {
            $this -> setContagem(0);
        }

        public function incrementar() {
            $this -> setContagem($this->getContagem() + 1);
        }

        public function cont() {
            return $this -> getContagem();
        }

        // Métodos especiais
        function __construct($cont) {
            $this -> setContagem($cont);
        }
        
        private function getContagem(){
            return $this->contagem;
        }
        public function setContagem($contagem){
            $this->contagem = $contagem;
        }
    }