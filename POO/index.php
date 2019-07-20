
<?php
require_once "validacao.php";
require 'ContaCorrente.php';

$contaJoao =  new ContaCorrente('Joao da Silva','5199','16321-2  ',700.00);
$contaMaria =  new ContaCorrente('Maria Oliveira','1421','17521-2',1200.00);

echo"<pre>";
$contaJoao->transferencia("10",$contaMaria);
echo "<div style='display:inline-block;margin-top:1%;border:1px solid;padding:5px'>".$contaJoao."</div>";
echo "<div style='display:inline-block;margin:1%;border:1px solid;padding:5px'>". $contaMaria."</div>";