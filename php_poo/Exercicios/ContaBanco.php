<?php

class ContaBanco
{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $satus;

    public function abrirConta($t)
    {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t=="CC"){
            $this->setSaldo(50);
        }elseif ($t== "CP"){
            $this->saldo(150);
        }
   }

    public function feharConta()
    {
        if ($this->getSaldo() > 0){
            echo "<p>Conta ainda tem saldo,não podemos fech-la</p>";
        }
        elseif ($this->getSaldo() > 0){
            echo "<p>Conta está em débito.Impossivel encerra-lá</p>";
        }
        else{
            $this->setStatus(false);
        }
   }

    public function depositar($v)
    {
        if ($this->getStatus()){
            $this->setsaldo($this->getSaldo() + $v);
        }else{
            echo "<p>conta fechada. Não Consigo depositar. </p>"
        }
   }

    public function sacar($v)
    {
        if ($this->getStatus()){
            if($this->getSaldo() > $v){
                $this->setSaldo($this->GetSaldo() - $v);
            }
        }else{
            echo "<p>Saldo Insuficiente para saque</p>";
        }
   }

    public function pagarMensal()
    {
        
   }

    public function __construct($numConta, $tipo, $dono, $saldo, $satus)
    {
        $this->saldo = 0;
        $this->satus = false;
    }

    public function getnumConta()
    {
        
    }

    public function getTipo()
    {

    }

    public function getDono()
    {

    }

    public function getSaldo()
    {

    }

    public function getStatus()
    {

    }

    public function setNumConata($numConta)
    {
        $this->numConta = $numConta;
        
    }

    public function setTipo($tipo)
    {
        $this->tipo=$tipo;

    }

    public function setDono($dono)
    {
        $this->dono = $dono;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    public function setStatus($status)
    {
        $this->status = $status;

    }



}