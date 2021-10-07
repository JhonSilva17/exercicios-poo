<?php 

    require_once './metodos.php';

    class Elevador implements Metodos {
        private $andarAtual;
        private $totAndares;
        private $capPessoas;
        private $quantPessoas;

        // Métodos
        public function entra() {
            // Só pode entrar se o elevador tiver espaço
            if ($this -> getQuantPessoas() <= $this -> getCapPessoas()) {
                $this -> setQuantPessoas($this -> getQuantPessoas() + 1);
            } else {
                echo "Não possui mais espaço. Espere pelo próximo elevador";
            }
        }

        public function sai() {
            if ($this -> getQuantPessoas() > 0) {
                $this -> setQuantPessoas($this -> getQuantPessoas() - 1);
            } else {
                echo "O elevador está vazio";
            }
        }

        public function sobe() {
            // não deve subir se já estiver no último andar
            $atual = $this -> getAndarAtual();
            $totAndares = $this -> getTotAndares();

            if ($atual < $totAndares && $atual >= 0) {
                $this -> setAndarAtual($atual + 1);
            } else {
                echo "Não é possível subir mais um andar.";
                $this -> setAndarAtual($totAndares);
            }
        }

        public function desce() {
            $atual = $this -> getAndarAtual();

            if ($atual === 0) {
                echo "Não é possível descer";
            } else {
                $this -> setAndarAtual($atual - 1);
            }
        }


        // Métodos especiais
        public function __construct($capPessoas, $totAndares) {
            $this -> setAndarAtual(0);
            $this -> setTotAndares($totAndares);
            $this -> setCapPessoas($capPessoas);
            $this -> setQuantPessoas(0);
        }

        public function getAndarAtual(){
            return $this->andarAtual;
        }
        public function setAndarAtual($andarAtual){
            $this->andarAtual = $andarAtual;
        }
    
        public function getTotAndares(){
            return $this->totAndares;
        }
        public function setTotAndares($totAndares){
            $this->totAndares = $totAndares;
        }
    
        public function getCapPessoas(){
            return $this->capPessoas;
        }
        public function setCapPessoas($capPessoas){
            $this->capPessoas = $capPessoas;
        }
    
        public function getQuantPessoas(){
            return $this->quantPessoas;
        }
        public function setQuantPessoas($quantPessoas){
            $this->quantPessoas = $quantPessoas;
        }
    }