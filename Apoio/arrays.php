<?php
    echo "<title>Arrays em php </title>";
    echo "<h1>Arrays</h1><hr>";
    

    $dias = array("segunda","terça","quarta","quinta","sexta");
    // Os colchetes foram adotados como padrão de projetos
    $dias = ["segunda","terça","quarta","quinta","sexta"];

    $meses =  ['janeiro','fevereiro','março','abril','maio'];

    echo '<p>Conteúdo de $meses[2]; '.$meses[2].'</p>'; 
    echo '<br> <b>Dados do array $meses </b>';
        for($i=0;$i<count($meses);$i++)
            echo '<br>'.$meses[$i];  

    
    echo "<Br><Br><b> Array Associativo </b>";
    //  $pessoa['nome'] = 'Linus';
    // $pessoa['sistema'] =  'Linux';
    //$pessoa['linguagem'] =  'C';
    
    //Ou poderia ser escrito ... 
    $pessoa = [ 
        'nome'=>'Linus',
        'sistema'=>'Linux',
        'linguagem'=>'C'
    ];
   echo $pessoa['nome'].'<br>';
   echo $pessoa['sistema'].'<br>';
   echo $pessoa['linguagem'].'<br>';


    $alunos = array('luiz','carlos','joao','eduardo');


?>