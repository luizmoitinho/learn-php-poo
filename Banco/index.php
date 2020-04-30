<?php

    require_once('ContaPoupanca.php');


    $novaConta = new ContaPoupanca('Luiz Carlos','07462030551','12/05/1998',123456,5);
    echo "<h3>Novo Cliente</h3>";
    echo 'Nome.............:'.$novaConta->getNome();echo"<br>"; 
    echo 'CPF..............:'.$novaConta->getCpf(); echo"<br>";    
    echo 'Data nascimento..:'.$novaConta->getDataNasc();echo"<br>";   
    echo 'Nº Conta.........:'.$novaConta->getNumConta();echo"<br>";     
    echo 'Agência..........:'.$novaConta->getNumAgencia(); echo"<br>";   
    echo 'Saldo.........: R$'.$novaConta->getSaldo();echo"<br>";   

    $novaConta->deposito(10);
    $novaConta->saque(1.5);
?>