<?php

$horarios = [];
$dia; #var dia = 'hoje'

if(isset($_POST['horario'])){
    $horario = $_POST['horario'];

    if($horario >= '07:00' && $horario < '10:00'){
        $horarios = [
            $horario,
            ($horario + '03:00'),
            ($horario + '06:00'),
            ($horario + '08:00'),
            ($horario + '11:00'),
            ($horario + '13:00')
        ];
    }
    elseif($horario >= '10:00' && $horario < '11:00'){
        $horarios = [
            '-',
            $horario,
            ($horario + '03:00'),
            ($horario + '06:00'),
            ($horario + '08:00'),
            ($horario + '11:00'),
        ];
    }
    elseif($horario >= '11:00' && $horario < '14:00'){
        $horarios = [
            '-',
            '-',
            $horario,
            ($horario + '03:00'),
            ($horario + '06:00'),
            ($horario + '08:00'),
        ];
    }
    elseif($horario >= '14:00' && $horario < '17:00'){
        $horarios = [
            '-',
            '-',
            '-',
            $horario,
            ($horario + '03:00'),
            ($horario + '06:00'),
        ];
    }
    elseif($horario >= '17:00' && $horario < '19:00'){
        $horarios = [
            '-',
            '-',
            '-',
            '-',
            $horario,
            ($horario + '03:00'),
        ];
    }
    elseif($horario >= '19:00' && $horario < '23:00'){
        $horarios = [
            '-',
            '-',
            '-',
            '-',
            '-',
            $horario,
        ];
    }
    else{
        $horarios = [
            '08:00',
            '10:00',
            '12:00',
            '15:00',
            '18:00',
            '21:00'
        ];

        $dia; #dia recebe amanhã;
        #session mensagem recebe info sistema setado para amanhã
    }

    $_SESSION['horarios'] = $horarios;
}

?>