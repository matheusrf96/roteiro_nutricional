<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$hora_atual = new DateTime("now", new DateTimeZone('America/Sao_Paulo'));

function exibeRefeicao($inicio, $final){
    for($i = 0; $i < 6; $i++){
        echo "
            <td>
                ".$inicio." - ".$final."
            </td>
        ";
    }
}

?>

<h4>Roteiro: </h4>

<?php 
    if(!isset($_SESSION['horario_inicial'])){
        echo "<p class='red-text'>Horário ainda não definido! Defina um horário na aba 'Configurar Roteiro'.</p>";
    }
    else{ ?>
        <table class="centered highlight">
            <thead>
                <tr>
                    <th></th>
                    <th>Dia 1</th>
                    <th>Dia 2</th>
                    <th>Dia 3</th>
                    <th>Dia 4</th>
                    <th>Dia 5</th>
                    <th>Dia 6</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Café da Manhã</th>
                    <?php exibeRefeicao($_SESSION['horario_inicial'][0], $_SESSION['horario_final'][0]) ?>
                </tr>
                <tr>
                    <th>Lanche da Manhã</th>
                    <?php exibeRefeicao($_SESSION['horario_inicial'][1], $_SESSION['horario_final'][1]) ?>
                </tr>
                <tr>
                    <th>Almoço</th>
                    <?php exibeRefeicao($_SESSION['horario_inicial'][2], $_SESSION['horario_final'][2]) ?>
                </tr>
                <tr>
                    <th>Café da Tarde</th>
                    <?php exibeRefeicao($_SESSION['horario_inicial'][3], $_SESSION['horario_final'][3]) ?>
                </tr>
                <tr>
                    <th>Lanche da Tarde</th>
                    <?php exibeRefeicao($_SESSION['horario_inicial'][4], $_SESSION['horario_final'][4]) ?>
                </tr>
                <tr>
                    <th>Jantar</th>
                    <?php exibeRefeicao($_SESSION['horario_inicial'][5], $_SESSION['horario_final'][5]) ?>
                </tr>
            </tbody>
        </table>

<?php    } //endif ?>