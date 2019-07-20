<?php

class ContaCorrente{
    //sprotected $cadastrados;
    private $titular;
    private $agencia;
    private $numero;
    private $saldo;

    public function __construct ($titular,$agencia, $numero,$saldo){
        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->numero=$numero;
        $this->saldo = $saldo;
    }
    //metodos mágicos
    public function __get($atributo){
        Validacao::exceptionAtributo($atributo);  
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        Validacao::exceptionAtributo($atributo);
        return $this->$atributo =  $valor;
    }

    public function saque($s){
        if($this->saldo<$s)
            echo "Erro ao sacar valor da conta!<br>";
        else
            $this->saldo -= $s;
       return $this;
    }

    public function deposito($d){
        Validacao::isNumeric($d);
        $this->saldo +=$d;
        //echo ++$this->cadastrados;
        return $this;
    }
    private function formataSaldo(){
        return number_format($this->saldo,2,",",".");
    }
    public function getSaldo(){
        return $this->formataSaldo();
    }
    public function transferencia( $valor, ContaCorrente $conta){
        Validacao::isNumeric($valor);
        $this->saque($valor);
        $conta->deposito($valor);
        return $this;
    }

    public function __toString(){
        return "Dados da Conta <br>".
                "<br>Titular :".$this->titular.
                "<br>Agencia :".$this->agencia.
                "<br>Conta   :".$this->numero.
                "<br>Saldo   :".$this->getSaldo();
    }
    /*
    // ======= TITULAR ===== 
    public function getTitular(){
        return $this->titular;
    }
    public function setTitular($t){
        $this->titular = $t;
    }

    // ======= AGENCIA ===== 
    public function getAgencia(){
        return $this->agencia;
    }
    public function setAgencia($a){
        $this->agencia = $a;
    }
     
    // ======= AGENCIA ===== 
    public function getNumero(){
        return $this->numero;
    }
    public function setnumero($n){
        $this->numero = $n;
    }

    // ======= SALDO ===== 
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($s){
        $this->saldo = $s;
    }

    */
 

}