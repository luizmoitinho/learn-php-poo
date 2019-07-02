<?php

    class Login{
        private $email,$senha;

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


        public function getEmail(){
            return $this->email;

        }
        public function getSenha(){
            return $this->senha;
        }
    }



    // main
    $telaLogin = new Login();
    $telaLogin->setEmail("teste/-a()@hotmail.com");
    $telaLogin->setSenha("123456");
    $telaLogin->logar("teste@hotmail.com","123456");
    echo $telaLogin->getEmail();
?>