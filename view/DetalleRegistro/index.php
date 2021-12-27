<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["us_id"])){ 
?>
<!DOCTYPE html>
<html>
    <?php require_once("../MainHead/head.php");?>
	<title>Historial de Paciente</title>
	<script type="text/javascript" src="actions.js"></script>
</head>
<body class="with-side-menu dark-theme dark-theme-blue">
	
<?php require_once("../MainHeader/header.php");?>

    <div class="mobile-menu-left-overlay"></div>
	<?php require_once("../MainNav/nav.php");?>
    
	<!-- Contenido -->
	<div class="page-content ">
		<div class="container-fluid">

			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Historial de Paciente Registrado</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Historial de Paciente Registrado</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<div class="box-typical box-typical-padding">
				<p>
					Registro de Datos del Paciente.
				</p>

				<div class="row g-2">

		 
						  

	  
						 <div class="col-lg-12">
						<h5 class="m-t-lg with-border">SINTOMAS:</h5>
                        </div>

						
						<div class="col-lg-2">
							<label class="checkbox-inline">
                                  <input type="hidden" name="reg_tos" value="no" > 

                                <input type="checkbox" id="reg_tos" value="si" >&nbsp;TOS
								</label>
                            						
								<label class="checkbox-inline">
                                  <input type="hidden" name="reg_tos" value="no" > 

                                <input type="checkbox" id="reg_tos" value="si" >&nbsp;DOLOR DE GARGANTA
								</label>                  
							
								<label class="checkbox-inline">
                                  <input type="hidden" name="reg_tos" value="no" > 

                                <input type="checkbox" id="reg_tos" value="si" >&nbsp;CONGESTION NASAL
								</label>

								<label class="checkbox-inline">
                                  <input type="hidden" name="reg_tos" value="no" > 

                                <input type="checkbox" id="reg_tos" value="si" >&nbsp;DIFICULTAD RESPIRATORIA
								</label>

								<label class="checkbox-inline">
                                  <input type="hidden" name="reg_tos" value="no" > 

                                <input type="checkbox" id="reg_tos" value="si" >&nbsp;FIEBRE
								</label>

								<label class="checkbox-inline">
                                  <input type="hidden" name="reg_tos" value="no" > 

                                <input type="checkbox" id="reg_tos" value="si" >&nbsp;ESCALOFRIOS
  </label>
							</br>
                           </fieldset>
                            </div>
							<div class="col-lg-2">
							<label class="checkbox-inline">
                                  <input type="hidden" name="reg_tos" value="no" > 

                                <input type="checkbox" id="reg_tos" value="si" >&nbsp;MALESTAR GENERAL
								</label>
                            						
								<label class="checkbox-inline">
                                  <input type="hidden" name="reg_tos" value="no" > 

                                <input type="checkbox" id="reg_tos" value="si" >&nbsp;DIARREA
								</label>                  
							
								<label class="checkbox-inline">
                                  <input type="hidden" name="chek_mods" value="no" > 

                                <input type="checkbox" id="chek_mods" value="si" >&nbsp;NAUSEAS/VOMITOS
								</label>

								<label class="checkbox-inline">
                                  <input type="hidden" name="chek_vih" value="no" > 

                                <input type="checkbox" id="chek_vih" value="si" >&nbsp;CEFALEA
								</label>

								<label class="checkbox-inline">
                                  <input type="hidden" name="chek_dm" value="no" > 

                                <input type="checkbox" id="chek_dm" value="si" >&nbsp;ANOSMIA
								</label>

								<label class="checkbox-inline">
                                  <input type="hidden" name="chek_fac" value="no" > 

                                <input type="checkbox" id="chek_fac" value="si" >&nbsp;AGEUSIA
                                </label>
							</br>
                           </fieldset>
                            </div>

							<div class="col-lg-2">
							<label class="checkbox-inline">
                                  <input type="hidden" name="chek_bk" value="no" > 

                                <input type="checkbox" id="chek_bk" value="si" >&nbsp;MALESTAR GENERAL
								</label>
                            						
								<label class="checkbox-inline">
                                  <input type="hidden" name="chek_cultivo" value="no" > 

                                <input type="checkbox" id="chek_cultivo" value="si" >&nbsp;DIARREA
								</label>                  
							
								<label class="checkbox-inline">
                                  <input type="hidden" name="chek_mods" value="no" > 

                                <input type="checkbox" id="chek_mods" value="si" >&nbsp;NAUSEAS/VOMITOS
								</label>

								<label class="checkbox-inline">
                                  <input type="hidden" name="chek_vih" value="no" > 

                                <input type="checkbox" id="chek_vih" value="si" >&nbsp;CEFALEA
								</label>

								<label class="checkbox-inline">
                                  <input type="hidden" name="chek_dm" value="no" > 

                                <input type="checkbox" id="chek_dm" value="si" >&nbsp;ANOSMIA
								</label>

								<label class="checkbox-inline">
                                  <input type="hidden" name="chek_fac" value="no" > 

                                <input type="checkbox" id="chek_fac" value="si" >&nbsp;AGEUSIA
                                </label>
							</br>
                           </fieldset>
                            </div>

							<div class="col-lg-12">
						<h5 class="m-t-lg with-border">SIGNOS:</h5>
                        </div>

						
						<div class="col-lg-2">
							<label class="checkbox-inline">
                                  <input type="hidden" name="chek_bk" value="no" > 

                                <input type="checkbox" id="chek_bk" value="si" >&nbsp;TOS
								</label>
                            						
								<label class="checkbox-inline">
                                  <input type="hidden" name="chek_cultivo" value="no" > 

                                <input type="checkbox" id="chek_cultivo" value="si" >&nbsp;DOLOR DE GARGANTA
								</label>                  
							
								<label class="checkbox-inline">
                                  <input type="hidden" name="chek_mods" value="no" > 

                                <input type="checkbox" id="chek_mods" value="si" >&nbsp;CONGESTION NASAL
								</label>

								<label class="checkbox-inline">
                                  <input type="hidden" name="chek_vih" value="no" > 

                                <input type="checkbox" id="chek_vih" value="si" >&nbsp;DIFICULTAD RESPIRATORIA
								</label>

								<label class="checkbox-inline">
                                  <input type="hidden" name="chek_dm" value="no" > 

                                <input type="checkbox" id="chek_dm" value="si" >&nbsp;FIEBRE
								</label>

								<label class="checkbox-inline">
                                  <input type="hidden" name="chek_fac" value="no" > 

                                <input type="checkbox" id="chek_fac" value="si" >&nbsp;ESCALOFRIOS
  </label>
							</br>
                           </fieldset>
                            </div>
							<div class="col-lg-2">
							<label class="checkbox-inline">
                                  <input type="hidden" name="chek_bk" value="no" > 

                                <input type="checkbox" id="chek_bk" value="si" >&nbsp;MALESTAR GENERAL
								</label>
                            						
								<label class="checkbox-inline">
                                  <input type="hidden" name="chek_cultivo" value="no" > 

                                <input type="checkbox" id="chek_cultivo" value="si" >&nbsp;DIARREA
								</label>                  
							
								<label class="checkbox-inline">
                                  <input type="hidden" name="chek_mods" value="no" > 

                                <input type="checkbox" id="chek_mods" value="si" >&nbsp;NAUSEAS/VOMITOS
								</label>

								<label class="checkbox-inline">
                                  <input type="hidden" name="chek_vih" value="no" > 

                                <input type="checkbox" id="chek_vih" value="si" >&nbsp;CEFALEA
								</label>

								<label class="checkbox-inline">
                                  <input type="hidden" name="chek_dm" value="no" > 

                                <input type="checkbox" id="chek_dm" value="si" >&nbsp;ANOSMIA
								</label>

								<label class="checkbox-inline">
                                  <input type="hidden" name="chek_fac" value="no" > 

                                <input type="checkbox" id="chek_fac" value="si" >&nbsp;AGEUSIA
                                </label>
							</br>
                           </fieldset>
                            </div>

							<div class="col-lg-2">
							<label class="checkbox-inline">
                                  <input type="hidden" name="chek_bk" value="no" > 

                                <input type="checkbox" id="chek_bk" value="si" >&nbsp;MALESTAR GENERAL
								</label>
                            						
								<label class="checkbox-inline">
                                  <input type="hidden" name="chek_cultivo" value="no" > 

                                <input type="checkbox" id="chek_cultivo" value="si" >&nbsp;DIARREA
								</label>                  
							
								<label class="checkbox-inline">
                                  <input type="hidden" name="chek_mods" value="no" > 

                                <input type="checkbox" id="chek_mods" value="si" >&nbsp;NAUSEAS/VOMITOS
								</label>

								<label class="checkbox-inline">
                                  <input type="hidden" name="chek_vih" value="no" > 

                                <input type="checkbox" id="chek_vih" value="si" >&nbsp;CEFALEA
								</label>

								<label class="checkbox-inline">
                                  <input type="hidden" name="chek_dm" value="no" > 

                                <input type="checkbox" id="chek_dm" value="si" >&nbsp;ANOSMIA
								</label>

								<label class="checkbox-inline">
                                  <input type="hidden" name="chek_fac" value="no" > 

                                <input type="checkbox" id="chek_fac" value="si" >&nbsp;AGEUSIA
                                </label>
							</br>
                           </fieldset>
                            </div>

							<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="cuanti_descrip">Otros Especificar:</label>
								<div class="summernote-theme-1">
									<textarea id="cuanti_descrip" name="cuanti_descrip" class="summernote" name="name"></textarea>
								</div>
							</fieldset>
						</div>
						
						<div class="col-lg-12">
							<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;Guardar</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
	<!-- Contenido -->

	<?php require_once("../MainJs/js.php");?>
	
	<script type="text/javascript" src="nuevoregistro.js"></script>
  
	</body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>