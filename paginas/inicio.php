<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

function somarTempo() {
    $i = 0;
    foreach (func_get_args() as $time) {
        sscanf($time, '%d:%d', $hour, $min);
        $i += $hour * 60 + $min;
    }
    if ($h = floor($i / 60)) {
        $i %= 60;
    }

    if($h >= 24){
        $h -= 24;
    }

    return sprintf('%02d:%02d', $h, $i);
}

function atualizarDiferenca($dif){
    return somarTempo($dif, '03:00');
}

$hora_atual = new DateTime("now", new DateTimeZone('America/Sao_Paulo'));
// $hora_atual = new DateTime('07:30');

$dif = '00:00';

?>

<h4>Roteiro: </h4>

<?php 

// $horario_atual = date_format($hora_atual, 'H:i'); 
$horario_atual = "12:00";
echo "Hora Atual: ".$horario_atual;

?>

<?php 
    if(!isset($_SESSION['horario_inicial'])){
        echo "<p class='red-text'>Horário ainda não definido! Defina um horário na aba 'Configurar Roteiro'.</p>";
    }
    
    if($horario_atual < "07:00"){
        echo "Café da Manhã<br />";
        $horario_atual = "12:00";
    }
    if($horario_atual >= "12:00" && $horario_atual < "15:59"){
        echo "Almoço<br />";
        $horario_atual = "16:00";
    }
    if($horario_atual >= "16:00"){
        echo "Janta<br />";

    }
?>