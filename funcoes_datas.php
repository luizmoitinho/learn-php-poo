<?php

//data  Y - m - d
$data = date('d/m/Y H:i');


//strtotime -> diferença de datas
$dataInicial = '2020-05-10';
$dataFinal   = '2020-05-12';

$timeInicial = strtotime($dataInicial);
$timeFinal = strtotime($dataFinal);

$diferencaTime = $timeFinal - $timeInicial;

$diaSegundos =  24*60*60;

$diferencaDias = $diferencaTime/$diaSegundos;

echo $diferencaDias;