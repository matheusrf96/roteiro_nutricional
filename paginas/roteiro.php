<?php

$refeicoes = ["Café da Manhã", "Lanche da Manhã", "Almoço", "Café da Tarde", "Lanche da Tarde", "Jantar"];

?>

<div class="row">
    <div class="col s3"> </div>
    <div class="col s6">
        <h5>Definir novo horario inicial do sistema:</h5>
        <form id="form" action="?pg=processa_roteiro" method="post">
            <?php for($i = 0; $i < 6; $i++){ ?>
                <div class="input-field row">
                    <h6 class="left-align"><?php echo $refeicoes[$i] ?>: </h6>
                    <div class="col s5">
                        <input id="horarioIni<?php echo ($i + 1);?>" name="horarioIni<?php echo ($i + 1);?>" type="time" class="validate" required />
                        <label for="horarioIni<?php echo ($i + 1);?>">Horário Inicial</label>
                    </div>

                    <div class="col s5">
                        <input id="horarioIni<?php echo ($i + 1);?>" name="horarioFim<?php echo ($i + 1);?>" type="time" class="validate" required />
                        <label for="horarioIni<?php echo ($i + 1);?>">Horário Final</l0abel>
                    </div>
                </div>
            <?php } //endfor ?>
            <button class="btn waves-effect waves-light blue lighten-2" type="submit" name="action" onClick="return validacao()">Enviar
                <i class="material-icons right white-text">send</i>
            </button>
        </form>
    </div>
    <div class="col s3"> </div>
</div>