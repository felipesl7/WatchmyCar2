<?php
/**
 * Created by PhpStorm.
 * User: Gabriel
 * Date: 20/02/18
 * Time: 22:25
 */
?>
</div>
</div>
</div>
</section>
</div>
<div class="example-modal">
    <div class="modal fade" id="listaMotoristas" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Selecione o Motorista</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Motorista:</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Gabriel</option>
                                <option>Daniel</option>
                                <option>Bahia</option>
                                <option>Esteves</option>
                                <option>Greg</option>
                                <option>Felipe</option>
                                <option>Breno</option>
                            </select>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                        <button type="submit" data-toggle="modal" data-target="#infoViagem" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Cadastar</button>
                    </div>
            </div>
        </div>
    </div>
</div>

    <div class="example-modal">
        <div class="modal fade" id="infoViagem" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Informações da Viagem</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Origem</label>
                            <input class="form-control" id="origemViagem" placeholder="Aracaju">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Destino</label>
                            <input class="form-control" id="origemViagem" placeholder="Itabaiana">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Duração</label>
                            <input class="form-control" id="origemViagem" placeholder="41 minutos">
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
        </div>
