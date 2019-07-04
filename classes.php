<?php

class Cliente{
    public $nome;
    public $email;
    public $cpf;
    public $telefone;
    public $endereco;

    public function  __construct($nome, $email,$cpf,$telefone,$endereco=''){
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->endereco = $endereco;

    }
    public function apresentacao(){
        echo "Nome.... :". $this->nome.
             "<br>E-mail.... :".$this->email ;
    }

}

$cliente1  = new Cliente("Luiz Carlos Costa Moitinho","luizcarlos_costam@hotmail.com","07462030552"
,"11 969744218","Rua Prefeito Machados Menezes");

$cliente1->apresentacao();

?>