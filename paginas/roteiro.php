<div class="row">
    <div class="col s3"> </div>
    <div class="col s6">
        <h5>Definir novo horario inicial do sistema:</h5>
        <form id="form" action="?pg=processa_roteiro" method="post">
            <div class="input-field row">
                <div class="col s4">
                    <input id="horario" name="horario" type="time" class="validate" required />
                    <label for="horario">Horário Inicial</label>
                </div>

                <div class="col s4">
                    <input id="horario" name="horario" type="time" class="validate" required />
                    <label for="horario">Horário Final</label>
                </div>

                <button class="btn waves-effect waves-light blue lighten-2" type="submit" name="action" onClick="return validacao()">Enviar
                    <i class="material-icons right white-text">send</i>
                </button>
            </div>
        </form>
    </div>
    <div class="col s3"> </div>
</div>