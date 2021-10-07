<?php 

    class Invoice {
        private $numItemFaturado;
        private $descItem;
        private $quantItemComp;
        private $precoItem;

        // Método
        public function invoiceAmount() {
            $precoPorItem = $this -> getPrecoItem();
            $quantidade = $this -> getQuantItemComp();
            $valorFinal = $precoPorItem * $quantidade;
            return $valorFinal;
        }

        // Métodos especiais
        public function __construct($numItem, $descItem, $quantItem, $precoItem) {
            $this -> setNumItemFaturado($numItem);
            $this -> setDescItem($descItem);
            $this -> setQuantItemComp($quantItem);
            $this -> setPrecoItem($precoItem);
        }

        public function getNumItemFaturado(){
            return $this->numItemFaturado;
        }
        public function setNumItemFaturado($numItemFaturado){
            $this->numItemFaturado = $numItemFaturado;
        }
    
        public function getDescItem(){
            return $this->DescItem;
        }
        public function setDescItem($DescItem){
            $this->DescItem = $DescItem;
        }
    
        public function getQuantItemComp(){
            return $this->quantItemComp;
        }
        public function setQuantItemComp($quantItemComp){
            if ($quantItemComp < 0) {
                $this->quantItemComp = 0;
            } else {
                $this->quantItemComp = $quantItemComp;
            }
        }
    
        public function getPrecoItem(){
            return $this->precoItem;
        }
    
        public function setPrecoItem($precoItem){
           if ($precoItem < 0) {
                $this->precoItem = 0.0;
            } else {
                $this->precoItem = $precoItem;
            }
        }

    }