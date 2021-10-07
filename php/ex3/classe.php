<?php   
    require_once './interface.php';

    class Jogador implements JogadorFutebol {
        private $nome;
        private $posicao;
        private $dataNasc;
        private $nacionalidade;
        private $altura;
        private $peso;

        // Métodos
        public function idade() {
            $ano = $this -> getDataNasc();
            $anoAtual = date('Y');
            if (($ano < $anoAtual) && ($ano != 0) && ($ano >= 1970)) {
                $idade = $anoAtual - $ano;
                return $idade;
            } else {
                echo "Valores incompatíveis";
            }
        }

        public function quantoFalta() {
            $posicao = $this -> getPosicao();
            $idade = $this -> idade();

            if (($this -> getDataNasc() >= 1970)) {
                if ($posicao === 'Defesa') {
                    $quantoFalta = 40 - $idade;
    
                    if ($idade <= 40) {
                        return $quantoFalta === 1 ? "Em média, falta $quantoFalta ano para ele se aposentar" : "Em média, falta $quantoFalta anos para ele se aposentar";
    
                    } else {
                        return "Deveria ter se aposentado à " . abs($quantoFalta) ." anos.";
                    }
                } else if ($posicao === "Atacante") {
                    $quantoFalta = 35 - $idade;
    
                    if ($idade <= 35) {
                        return $quantoFalta === 1 ? "Em média, falta $quantoFalta ano para ele se aposentar" : "Em média, falta $quantoFalta anos para ele se aposentar";
    
                    } else {
                        return "Deveria ter se aposentado à " . abs($quantoFalta) ." anos.";
                    }
                } else if ($posicao === 'Meio-campo') {
                    $quantoFalta = 38 - $idade;
    
                    if ($idade <= 38) {
                        return $quantoFalta === 1 ? "Em média, falta $quantoFalta ano para ele se aposentar" : "Em média, falta $quantoFalta anos para ele se aposentar";
    
                    } else {
                        return "Deveria ter se aposentado à " . abs($quantoFalta) ." anos.";
                    }
                }
            } else {
                echo "Valores incompatíves";
            }
           
        }

        // Métodos especiais
        public function __construct($no, $po, $nasc, $na, $al, $pe) {
            $this -> setNome($no);
            $this -> setPosicao($po);
            $this -> setDataNasc($nasc);
            $this -> setNacionalidade($na);
            $this -> setAltura($al);
            $this -> setPeso($pe);
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
    
        public function getPosicao(){
            return ucfirst($this->posicao);
        }
        public function setPosicao($posicao){
            // Atacante = a
            // Defesa = d
            // Meio-campo = mc
            if ($posicao === 'a') {
                $this -> posicao = "Atacante";
            } else if ($posicao === "d") {
                $this -> posicao = "Defesa";
            } else if ($posicao === 'mc') {
                $this -> posicao = "Meio-campo";
            } else {
                echo 'Valor de "Posição" incompatível';
            }
        }
    
        public function getDataNasc(){
            return $this->dataNasc;
        }   
        public function setDataNasc($dataNasc){
            $this->dataNasc = $dataNasc;
        }
    
        public function getNacionalidade(){
            return $this->nacionalidade;
        } 
        public function setNacionalidade($nacionalidade){
            $this->nacionalidade = $nacionalidade;
        }
    
        public function getAltura(){
            return $this->altura;
        }
        public function setAltura($altura){
            $this->altura = $altura;
        }
    
        public function getPeso(){
            return $this->peso;
        } 
        public function setPeso($peso){
            $this->peso = $peso;
        }
    }