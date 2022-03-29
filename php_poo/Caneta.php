<?php

class Caneta
{



    private $modelo;
     private $ponta;
     private $cor;
     private $tampada;


    public function __construct($modelo, $cor, $ponta)
    {
        $this->ponta = $ponta;
        $this->cor = $cor;
        $this->modelo = $modelo;
        $this->setTampada(true);
    }

    function getPonta(){
        return$this->tampada;
    }

    function getTampada(){
        return $this->tampada;
    }

    function setModelo($modelo){
        $this->modelo = $modelo;
    }

    function setCor($cor){
        $this->cor = $cor;
    }

    function setPonta($ponta){
        $this->ponta = $ponta;
    }
}