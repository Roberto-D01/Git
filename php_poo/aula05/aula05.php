<?php

class ContaBnaco{

    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function  abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC"){
            $this->setSaldo(50);
        }elseif ($t == "CP"){
            $this->saldo(150);
        }
    }
    public function fecharConta(){
        if ($this->getSaldo()>0){
            echo "<p>Conta ainda tem dinheiro,não podemos fechá-la!</p>";
        }elseif ($this->getSaldo()<0){
            echo "<p>conta está em débito.Impossivel encerra-la!</p>";
        }else{
            $this->setStatus(false);
        }
    }

    public function depositar() {
        return $this->ponta;
    }

    public function sacar($P){
        $this->ponta = $p;
    }

   public function pagarMensal(){
        return $this->pagarMensal;
    }

    public function __construct(){

    }

    function getNumConta(){
        return $this->numConta;
    }
    function setNumConta($n){
        $this->numConta = $n;
    }

    function getTipo($tipo)
    {
        $this->tipo=$tipo;
    }

    function setTipo($tipo)
    {
        $this->tipo=$tipo;
    }

    function getDono($dono)
    {
        $this->tipo=$dono;
    }

    function setDono($dono)
    {
        $this->tipo=$dono;
    }

    function getSaldo($saldo)
    {
        $this->tipo=$saldo;
    }

    function setSaldo($saldo)
    {
        $this->tipo=$saldo;
    }
    function getSatatus($status)
    {
        $this->tipo=$status;
    }

    function setStatus($status)
    {
        $this->tipo=$status;
    }
}