<div id="modalregistro" class="modal fade bd-example-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                 <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="font-icon-close-2"></i>
                 </button>
                         <h4 class="modal-title" id="mdlregistro"></h4>
            </div>
			    <form method="post" id="registro_form">

						<input type="hidden" id="us_id" name="us_id" value="<?php echo $_SESSION["us_id"] ?>">

                         </br>
						<div class="form-row">
						     <fieldset class="form-group col-md-6">
								       <label class="form-label semibold" for="reg_ape">Apellidos:</label>
								       <input type="text" class="form-control" id="reg_ape" name="reg_ape" >
						     </fieldset>	
						     <fieldset class="form-group col-md-6">
								       <label class="form-label semibold" for="reg_nom">Nombre:</label>
								       <input type="text" class="form-control" id="reg_nom" name="reg_nom" >
						     </fieldset>
                        </div>
						
						<div class="form-row">
						     <fieldset class="form-group col-md-6">
								       <label class="form-label semibold" for="reg_telefono">Telefono/Celular:</label>
								       <input type="NUMBER" class="form-control" id="reg_telefono" name="reg_telefono" >
						     </fieldset>
						     <fieldset class="form-group col-md-6">
								       <label class="form-label semibold" for="reg_doc">Documento de Identidad:</label>
								       <input type="number" class="form-control" id="reg_doc" name="reg_doc" >
						     </fieldset>
						</div>
						
						<div class="form-row">
						     <fieldset class="form-group col-md-4">
								       <label class="form-label semibold" for="reg_edad">Edad:</label>
								       <input type="number" class="form-control" id="reg_edad" name="reg_edad" >
						     </fieldset>
						     <fieldset class="form-group col-md-4">
								       <label class="form-label semibold" for="reg_peso">Peso:</label>
								       <input type="number" class="form-control" id="reg_peso" name="reg_peso" >
						     </fieldset>
						     <fieldset class="form-group col-md-4">
								       <label class="form-label semibold" for="reg_talla">Talla:</label>
								       <input type="number" class="form-control" id="reg_talla" name="reg_talla" >
						     </fieldset>
						</div>
						
						<div class="form-row">	
						     <fieldset class="form-group col-md-6">
								       <label class="form-label semibold" for="depa_id">Departamento:</label>
								       <select id="depa_id" name="depa_id" class="form-control"></select>
						     </fieldset>

						     <fieldset class="form-group col-md-6">
								       <label class="form-label semibold" for="provin_id">Provincia:</label>
								       <select id="provin_id" name="provin_id" class="form-control"></select>
						     </fieldset>
						</div>
						<div class="form-row">
						     <fieldset class="form-group col-md-6">
								       <label class="form-label semibold" for="dist_id">Distrito:</label>
								       <select id="dist_id" name="dist_id" class="form-control"></select>
						     </fieldset>
						     <fieldset class="form-group col-md-6">
								       <label class="form-label semibold" for="nacion_id">Nacionalidad:</label>
								       <select id="nacion_id" name="nacion_id" class="form-control"></select>
						     </fieldset>
						</div>
												  
						<div class="form-group col-md-12">
						     <fieldset class="form-group">
								<label class="form-label semibold" for="reg_direccion">Direccion:</label>
								<input type="text" class="form-control" id="reg_direccion" name="reg_direccion" >
						     </fieldset>
						</div>
						
						     <div class="modal-footer">
						          <button type="button" class="btn btn-rounded btn-warning" data-dismiss="modal">Cerrar</button>
							      <button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-warning">Guardar</button>
						     </div>
				</form>
        </div>
    </div>
</div>

<?php require_once("../MainJs/js.php");?>
	
<script type="text/javascript" src="nuevoregistro.js"></script>