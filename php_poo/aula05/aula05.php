<?php

class ContaBnaco
{

    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function abrirConta($t)
    {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC") {
            $this->setSaldo(50);
        } elseif ($t == "CP") {
            $this->saldo(150);
        }
    }

    public function fecharConta()
    {
        if ($this->getSaldo() > 0) {
            echo "<p>Conta ainda tem dinheiro,não podemos fechá-la!</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>conta está em débito.Impossivel encerra-la!</p>";
        } else {
            $this->setStatus(false);
        }
    }

    public function depositar($v)
    {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
        } else {
            echo "<p>Conta fechada. Não conseguimos depositar.</p>";
        }
    }

    public function sacar($v)
    {
        if ($this->getSatatus()) {
            if ($this->getSaldo() > $v) {
                $this->setSaldo($this->getSaldo() - $v);
            } else {
                echo "<p>Saldo insuficente para saque</p>";
            }

        } else {
            echo "<p>Não podemos sacar de uma conta fechada</p>";
        }
    }

    public function pagarMensal()
    {
        if ($this->getTipo() == "CC") {
            $v = 12;
        } else if ($this->getTipo() == "CP") {
            $v = 20;
        }
        if ($this->setStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
        } else {
            echo "<p>problemas com a conta. Não podemos cobrar</p>";
        }
    }

    public function __construct()
    {
        $this->setSaldo(0);
        ''$this->setStatus(false);


    }

    function getNumConta()
    {
        return $this->numConta;
    }

    function setNumConta($n)
    {
        $this->numConta = $n;
    }

    function getTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    function getDono($dono)
    {
        $this->tipo = $dono;
    }

    function setDono($dono)
    {
        $this->tipo = $dono;
    }

    function getSaldo($saldo)
    {
        $this->tipo = $saldo;
    }

    function setSaldo($saldo)
    {
        $this->tipo = $saldo;
    }

    function getSatatus($status)
    {
        $this->tipo = $status;
    }

    function setStatus($status)
    {
        $this->tipo = $status;
    }
}