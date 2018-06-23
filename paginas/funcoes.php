<?php

function exibeRefeicao($inicio, $final){
    echo "
        <td>
            ".$inicio." - ".$final."
        </td>
    ";
}

function completaRoteiro($inicio, $final){
    for($i = 0; $i < 6; $i++){
        echo "
            <td>
                ".$inicio." - ".$final."
            </td>
        ";
    }
}

function somaTempo($horario, $adicao){
    if($horario != '-'){
        list($h, $m) = explode(':', $adicao);
        return date('H:i', strtotime($horario) + $h*60*60 + $m*60);
    }
    else{
        return '-';
    }
}

function tradutor($dia){
    if($dia == 'Sunday'){
        return 'Domingo';
    }
    elseif($dia == 'Monday'){
        return 'Segunda';
    }
    elseif($dia == 'Tuesday'){
        return 'Terça';
    }
    elseif($dia == 'Wednesday'){
        return 'Quarta';
    }
    elseif($dia == 'Thursday'){
        return 'Quinta';
    }
    elseif($dia == 'Friday'){
        return 'Sexta';
    }
    elseif($dia == 'Saturday'){
        return 'Sábado';
    }
}

?>