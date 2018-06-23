<?php

require_once "funcoes.php";

$horarios = [];
$dia = date('l');

if(isset($_POST['horario'])){
    $horario = $_POST['horario'];

    if($horario >= '07:00' && $horario < '10:00'){
        $horarios = [
            $horario,
            somaTempo($horario, '03:00'),
            somaTempo($horario, '06:00'),
            somaTempo($horario, '08:00'),
            somaTempo($horario, '11:00'),
            somaTempo($horario, '13:00')
        ];

        $_SESSION['roteiro'] = $horarios;
        $_SESSION['mensagem'] = FALSE;
    }
    elseif($horario >= '10:00' && $horario < '11:00'){
        $horarios = [
            '-',
            $horario,
            somaTempo($horario, '03:00'),
            somaTempo($horario, '06:00'),
            somaTempo($horario, '08:00'),
            somaTempo($horario, '11:00'),
        ];

        $roteiro = [
            somaTempo($horario, '-02:00'),
            $horario,
            somaTempo($horario, '02:00'),
            somaTempo($horario, '05:00'),
            somaTempo($horario, '07:00'),
            somaTempo($horario, '10:00'),
        ];

        $_SESSION['roteiro'] = $roteiro;
        $_SESSION['mensagem'] = FALSE;
    }
    elseif($horario >= '11:00' && $horario < '14:00'){
        $horarios = [
            '-',
            '-',
            $horario,
            somaTempo($horario, '03:00'),
            somaTempo($horario, '06:00'),
            somaTempo($horario, '08:00'),
        ];

        $roteiro = [
            somaTempo($horario, '-04:00'),
            somaTempo($horario, '-02:00'),
            $horario,
            somaTempo($horario, '03:00'),
            somaTempo($horario, '05:00'),
            somaTempo($horario, '08:00'),
        ];

        $_SESSION['roteiro'] = $roteiro;
        $_SESSION['mensagem'] = FALSE;
    }
    elseif($horario >= '14:00' && $horario < '17:00'){
        $horarios = [
            '-',
            '-',
            '-',
            $horario,
            somaTempo($horario, '03:00'),
            somaTempo($horario, '06:00'),
        ];

        $roteiro = [
            somaTempo($horario, '-07:00'),
            somaTempo($horario, '-05:00'),
            somaTempo($horario, '-03:00'),
            $horario,
            somaTempo($horario, '02:00'),
            somaTempo($horario, '05:00'),
        ];

        $_SESSION['roteiro'] = $roteiro;
        $_SESSION['mensagem'] = FALSE;
    }
    elseif($horario >= '17:00' && $horario < '19:00'){
        $horarios = [
            '-',
            '-',
            '-',
            '-',
            $horario,
            somaTempo($horario, '03:00'),
        ];

        $roteiro = [
            somaTempo($horario, '-09:00'),
            somaTempo($horario, '-07:00'),
            somaTempo($horario, '-05:00'),
            somaTempo($horario, '-02:00'),
            $horario,
            somaTempo($horario, '03:00'),
        ];

        $_SESSION['roteiro'] = $roteiro;
        $_SESSION['mensagem'] = FALSE;
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

        $roteiro = [
            somaTempo($horario, '-12:00'),
            somaTempo($horario, '-10:00'),
            somaTempo($horario, '-08:00'),
            somaTempo($horario, '-05:00'),
            somaTempo($horario, '-03:00'),
            $horario,
        ];

        $_SESSION['roteiro'] = $roteiro;
        $_SESSION['mensagem'] = FALSE;
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

        if($horario >= '23:00'){
            $dia = date ("l", strtotime("+1 day", strtotime($dia)));
            $_SESSION['mensagem'] = "Devido ao horário inserido, o roteiro iniciará amanhã."; 
        }

        $_SESSION['roteiro'] = $horarios;
    }

    $_SESSION['dia'] = $dia;
    $_SESSION['horarios'] = $horarios;

    echo "<h5>O horário foi cadastrado com sucesso!</h5>";
    header("refresh:3; url=?pg=inicio");
}

?>