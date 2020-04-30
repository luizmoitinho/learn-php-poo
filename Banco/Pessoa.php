<?php

class Pessoa{
    protected $nome;
    protected $cpf;
    protected $dataNascimento;
    protected $tipoPessoa;


    public function __construct($nome,$cpf,$dataNascimento){
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setDataNasc($dataNascimento);
    }

    public function setNome(String $nome){
        $this->nome= $nome;
    }

    public function setCpf(String $cpf){
        $this->cpf= $cpf;
    }

    public function setDataNasc(String $dataNascimento){
        $this->dataNascimento= $dataNascimento;
    }

    public function setTipoPessoa($tipo){
        $this->tipoPessoa = $pessoa;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function getDataNasc(){
        return $this->dataNascimento;
    }

    public function getTipoPessoa(){
        return $this->tipoPesoa;
    }
}

?>