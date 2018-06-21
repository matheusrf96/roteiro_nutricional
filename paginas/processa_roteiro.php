<?php

$horario;

if(isset($_POST)){
    $horario_inicial = [
    	$_POST['horarioIni1'],
    	$_POST['horarioIni2'],
    	$_POST['horarioIni3'],
    	$_POST['horarioIni4'],
    	$_POST['horarioIni5'],
    	$_POST['horarioIni6'],
    ];
    $horario_final = [
    	$_POST['horarioFim1'],
    	$_POST['horarioFim2'],
    	$_POST['horarioFim3'],
    	$_POST['horarioFim4'],
    	$_POST['horarioFim5'],
    	$_POST['horarioFim6'],
    ];

    $_SESSION['horario_inicial'] = $horario_inicial;
    $_SESSION['horario_final'] = $horario_final;

    echo "<h5>Os horários foram cadastrados com sucesso!</h5>";

    header("refresh:2; url=?pg=inicio");
}
else{
    echo "Erro!";
}

?>