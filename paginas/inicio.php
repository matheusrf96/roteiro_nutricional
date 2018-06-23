<?php

require_once "funcoes.php";

?>

<h4>Roteiro: </h4>

<?php 
    if(!isset($_SESSION['horarios'])){
        echo "<p class='red-text'>Horário ainda não definido! Defina um horário na aba 'Configurar Roteiro'.</p>";
    }
    else{ 
        if($_SESSION['mensagem'] != FALSE){
            echo "<span class='aviso red-text'>Info: ".$_SESSION['mensagem']."</span>";
        }

        ?>
        <table class="centered highlight">
            <thead>
                <tr>
                    <th></th>
                    <th><?php echo tradutor($_SESSION['dia']); ?></th>
                    <th><?php echo tradutor(date("l", strtotime("+1 day", strtotime($_SESSION['dia'])))); ?></th>
                    <th><?php echo tradutor(date("l", strtotime("+2 day", strtotime($_SESSION['dia'])))); ?></th>
                    <th><?php echo tradutor(date("l", strtotime("+3 day", strtotime($_SESSION['dia'])))); ?></th>
                    <th><?php echo tradutor(date("l", strtotime("+4 day", strtotime($_SESSION['dia'])))); ?></th>
                    <th><?php echo tradutor(date("l", strtotime("+5 day", strtotime($_SESSION['dia'])))); ?></th>
                    <th><?php echo tradutor(date("l", strtotime("+6 day", strtotime($_SESSION['dia'])))); ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Café da Manhã</th>
                    <?php 
                        exibeRefeicao($_SESSION['horarios'][0], somaTempo($_SESSION['horarios'][0], '00:30'));
                        completaRoteiro($_SESSION['roteiro'][0], somaTempo($_SESSION['roteiro'][0], '00:30'));
                    ?>
                </tr>
                <tr>
                    <th>Lanche da Manhã</th>
                    <?php 
                        exibeRefeicao($_SESSION['horarios'][1], somaTempo($_SESSION['horarios'][1], '00:30'));
                        completaRoteiro($_SESSION['roteiro'][1], somaTempo($_SESSION['roteiro'][1], '00:30'));
                    ?>
                </tr>
                <tr>
                    <th>Almoço</th>
                    <?php 
                        exibeRefeicao($_SESSION['horarios'][2], somaTempo($_SESSION['horarios'][2], '01:00'));
                        completaRoteiro($_SESSION['roteiro'][2], somaTempo($_SESSION['roteiro'][2], '01:00'));
                    ?>
                </tr>
                <tr>
                    <th>Café da Tarde</th>
                    <?php 
                        exibeRefeicao($_SESSION['horarios'][3], somaTempo($_SESSION['horarios'][3], '00:30'));
                        completaRoteiro($_SESSION['roteiro'][3], somaTempo($_SESSION['roteiro'][3], '00:30'));
                    ?>
                </tr>
                <tr>
                    <th>Lanche da Tarde</th>
                    <?php 
                        exibeRefeicao($_SESSION['horarios'][4], somaTempo($_SESSION['horarios'][4], '00:30'));
                        completaRoteiro($_SESSION['roteiro'][4], somaTempo($_SESSION['roteiro'][4], '00:30'));
                    ?>
                </tr>
                <tr>
                    <th>Jantar</th>
                    <?php 
                        exibeRefeicao($_SESSION['horarios'][5], somaTempo($_SESSION['horarios'][5], '01:00'));
                        completaRoteiro($_SESSION['roteiro'][5], somaTempo($_SESSION['roteiro'][5], '01:00'));
                    ?>
                </tr>
            </tbody>
        </table>

<?php    } //endif ?>