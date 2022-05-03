<?php 
    //Gera array sorteado e apresenta na tela
    $sorteados = array();
    for($i = 0; $i<20; $i++) {
        array_push($sorteados, random_int(1, 10));
    }
    foreach($sorteados as $num) {
        echo $num . " ";
    }

    //Separa valores únicos em outro array
    $sorteados = array_count_values($sorteados);
    $array = array();
    foreach ($sorteados as $k => $v){
        if($v === 1) $array[] = $k;
    }

    //Mostra na tela valores únicos do array
    echo '<br>';
    foreach($array as $num) {
        echo $num . " ";
    }

?>