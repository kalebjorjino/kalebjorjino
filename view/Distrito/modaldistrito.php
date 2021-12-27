<div id="modaldistrito" class="modal fade bd-example-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="font-icon-close-2"></i>
                </button>
                <h4 class="modal-title" id="mdldistrito"></h4>
            </div>
            <form method="post" id="distrito_form">
                <div class="modal-body">
                <input type="hidden" id="dist_id" name="dist_id" value="<?php echo $_SESSION["us_id"] ?>">

                  

                    <div class="form-group">
                    <label class="form-label semibold" for="dist_nom">Distrito</label>
								<input type="text" class="form-control" id="dist_nom" name="dist_nom" placeholder="Ingrese Distrito.." required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="action" id="#" value="add" class="btn btn-rounded btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>