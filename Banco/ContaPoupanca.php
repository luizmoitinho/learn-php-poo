<?php

require_once('Pessoa.php');

class ContaPoupanca extends Pessoa{
    //Atributos

    private $numeroConta;
    private $numAgencia;
    private $tipoConta;
    private $saldo;
    

    function __construct($nome,$cpf,$dtNascimento,$numConta,$numAgencia){
        parent:: __construct($nome,$cpf,$dtNascimento); // Herda o construtor da outra classe
        $this->setNumConta($numConta);
        $this->setNumAgencia($numAgencia);
        $this->setTipoConta('Conta Poupança');
        $this->saldo = 0;

    }


    public function deposito($valorDeposito = 0){
        if($valorDeposito<0 || !is_numeric($valorDeposito)) return false;
        $this->saldo += $valorDeposito;
        echo "
            <p>
                <h3>Deposito efetuado com sucesso!</h3>
                <span>Novo saldo: R$".$this->saldo."</span>
            </p>";

    }

    public function saque($valorSaque = 0){
        if($valorSaque<0 || !is_numeric($valorSaque)) return false;
        
        if($valorSaque>$this->saldo){
            echo "
            <p>
                <h3>saldo indisponivel!!</h3>
            </p>";
            return false;
        }
        else{
            $this->saldo -= $valorSaque;
            echo "
            <p>
                <h3>Saque efetuado com sucesso!</h3>
                <span>Novo saldo: R$".$this->saldo."</span>
            </p>";

        }
        
    }

    //Métodos modificadores
    public function setNumConta(String $numeroConta){
        if(!is_numeric($numeroConta)) return false;
        $this->numeroConta= $numeroConta;
    }

    public function setNumAgencia(String $numAgencia){
        if(!is_numeric($numAgencia)) return false;
        $this->numAgencia= $numAgencia;
    }

    public function setTipoConta(String $tipoConta){
        $this->tipoConta= $tipoConta;
    }

    public function getNumConta(){
        return $this->numeroConta;
    }

    public function getNumAgencia(){
        return $this->numAgencia;
    }

    public function getTipoConta(){
        return $this->tipoConta;
    }

    public function getSaldo(){
        return $this->saldo;
    }


}
