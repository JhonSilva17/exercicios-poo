<?php   

    class Data {
        // Atributos
        private $dia;
        private $mes;
        private $ano;

        // Métodos
        public function date() {
            $dia = $this -> getDia();
            $mes = $this -> getMes();
            $ano = $this -> getAno();

            $date = "$dia/$mes/$ano";
            return $date;
        }

        public function nextDia() {
            $this -> setDia($this -> getDia() + 1);
            
            if ($this -> getDia() > '31') {
                $this -> setDia('01');
                $this -> setMes($this -> getMes() + 1);
            } 
            
            if ($this -> getMes() > '12') {
                $this -> setMes('01');
                $this -> setAno($this -> getAno() + 1);
            }
        }

        // Métodos especiais
        public function __construct($d, $m, $a) {
            if (($d <= '0') || ($m <= '0') || ($a <= '0')) {
                echo "Valores inconsistentes. Por favor, tente novamente.";
            } else if (($d > '31') || ($m > '12') || ($a > date('Y'))) { 
                echo "Valores inconsistentes. Por favor, tente novamente.";
             } else {
                $this -> setDia($d);
                $this -> setMes($m);
                $this -> setAno($a);
            }
        }

        public function getDia(){
            return $this->dia;
        } 
        public function setDia($dia) {
            $this->dia = $dia;
        }
    
        public function getMes(){
            return $this->mes;
        }
        public function setMes($mes){
            $this -> mes = $mes;
        }
    
        public function getAno(){
            return $this->ano;
        }
        public function setAno($ano){
            $this->ano = $ano;
           
        }
    }