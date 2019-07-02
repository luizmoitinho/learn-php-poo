<?php

    class Login{
        private $email,$senha,$nome;
        public function __construct($email,$senha,$nome){
            $this->setEmail($email);
            $this->setSenha($senha);
            $this->setNome($nome);
        }

        public function logar($email,$senha){
            if($this->email ==  $email && $this->senha == $senha):
                echo "<script>alert('Usuário cadastrado no sistema!'+
                'E-mail : $this->email');</script>";
            else:
                echo "<script>alert('Usuário não está cadastrado no sistema!');</script>";

            endif;
        }

        public function setEmail($e){
            $email = filter_var($e,FILTER_SANITIZE_EMAIL);
            $this->email = $email;
        }

        public function  setSenha($s){
            $this->senha = $s;
        }

        public function  setNome($n){
            $this->nome=  $n;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function getEmail(){
            return $this->email;

        }
        public function getNome(){
            return $this->nome;
        }
    }



    // main
    $telaLogin = new Login("teste/-a()@hotmail.com","123456","Luiz Carlos Costa Moitinho");

    $telaLogin->logar("teste@hotmail.com","123456");
    echo $telaLogin->getEmail()."<br>";
    echo $telaLogin->getNome();
?>