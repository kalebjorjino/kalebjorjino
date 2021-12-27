<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["us_id"])){ 
?>
<!DOCTYPE html>
<html>
    <?php require_once("../MainHead/head.php");?>
	<title>Registro PACIENTE</title>
	<script type="text/javascript" src="actions.js"></script>
	<style type="text/css">
         
         #caso{
             display: none;
        
		 }
         </style>
</head>
<body class="with-side-menu dark-theme dark-theme-blue">

    <?php require_once("../MainHeader/header.php");?>

    <div class="mobile-menu-left-overlay"></div>
    
    <?php require_once("../MainNav/nav.php");?>

	<!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">

			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>ANTECEDENTES EPIDEMIOLOGICOS Y PATOLOGICOS</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Registro de datos</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<div class="box-typical box-typical-padding">
				<p>
					Desde esta ventana podra generar registros.
				</p>

				<div class="row g-2">

				     <div class="col-lg-6">
				          <div class="input-group">
                              <div class="form-outline">
		                       </br>
							  <label class="form-label semibold" for="reg_doc">Nro Documento (*)</label>
                                   <input id="search-focus" type="search" id="reg_cod" name="reg_cod" class="form-control" />                          
                             </div>
                                   <button type="button" class="btn btn-warning" onclick="getData()">buscar</button>								  
                          </div>
                    </div>
					
				           <form method="post" id="sintomas_form">

						              <input type="hidden" id="us_id" name="us_id" value="<?php echo $_SESSION["us_id"] ?>">
									  <h5 class="m-t-lg with-border"></h5>
									  
									  
                          </br></br>		 		 
						  <div class="col-lg-12">			  
						   <h5 class="m-t-lg with-border">PACIENTE</h5>
                           </div>


						<div class="col-lg-4">
						<fieldset class="form-group">
								<label class="form-label semibold" for="reg_ape">Apellidos (*)</label>
								<input type="text" class="form-control" id="reg_ape" name="reg_ape" readonly>
							</fieldset>
						</div>
						<div class="col-lg-4">
						<fieldset class="form-group">
								<label class="form-label semibold" for="reg_nom">Nombre (*)</label>
								<input type="text" class="form-control" id="reg_nom" name="reg_nom" readonly>
							</fieldset>
						</div>

						   <div class="col-lg-2">
						        <fieldset class="form-group">
								          <label class="form-label semibold" for="reg_edad">Edad (*)</label>
								                 <input type="text" class="form-control" id="reg_edad" name="reg_edad" readonly>
							    </fieldset>
						   </div>

						    <div class="col-lg-2">
							     <fieldset class="form-group">
								           <label class="form-label semibold" for="dist_id">Establecimiento (*)</label>
												  <input type="text" class="form-control" id="estb_id" name="nacion_id" readonly>
							     </fieldset>
						    </div>

							<div class="col-lg-12">
                                 <fieldset class="form-group">
	                                       <label class="form-label semibold" for="tpcaso">Tipo de Caso (*)</label>
	                                              <input type="radio" onclick="mostrarcaso();" id="gen_1" name="tpcaso" value="sintomatico">&nbsp;Sintomatico&nbsp;&nbsp;&nbsp;&nbsp;
	                                              <input type="radio" onclick="ocultarcaso();" id="gen_2" name="tpcaso" value="asintomatico">&nbsp;Asintomatico
                                 </fieldset>
                            </div>
						<div id="caso" class="form-group">
						     <div  class="col-lg-3">
						        <fieldset class="form-group">
								<label class="form-label semibold" for="reg_fechSint">Fecha de Inicio de Sintomas (*)</label>
								<input type="date" class="form-control" id="reg_fechSint" name="reg_fechSint">
							    </fieldset>
						     </div>
						
						     <div  class="col-lg-3">
						        <fieldset class="form-group">
								<label class="form-label semibold" for="reg_fechAisl">Fecha de Inicio de Aislamiento (*)</label>
								<input type="date" class="form-control" id="reg_fechAisl" name="reg_fechAisl">
							    </fieldset>
						     </div>
						
						<div   class="col-lg-12>
						<label class="form-label semibold" for=""></label>
						</div>

						      <div  class="col-lg-12">			  
						       <h5 class="m-t-lg with-border">Lugar Probable de infeccion</h5>
                               </div>

						   <div  class="col-lg-2">
							<fieldset class="form-group">
								<label class="form-label semibold" for="depa_id">Departamento (*)</label>
								<select id="depa_id" name="depa_id" class="form-control">
								</select>
							</fieldset>
						   </div>

						<div  class="col-lg-2">
							<fieldset class="form-group">
								<label class="form-label semibold" for="provin_id">Provincia (*)</label>
								<select id="provin_id" name="provin_id" class="form-control">
								</select>
							</fieldset>
						</div>

						<div  class="col-lg-2">
							<fieldset class="form-group">
								<label class="form-label semibold" for="dist_id">Distrito (*)</label>
								<select id="dist_id" name="dist_id" class="form-control">
								</select>
							</fieldset>
						</div>

							     

						  

	  
						 <div  class="col-lg-12">
						         <h5 class="m-t-lg with-border">Sintomas (*)</h5>
                        </div>

						<div class="col-lg-2">
							<label class="checkbox-inline">
                                  <input type="hidden" name="reg_tos" value="no" > 

                                <input type="checkbox" id="reg_tos" value="si" >&nbsp;Tos
								</label>
                            						
								<label class="checkbox-inline">
                                  <input type="hidden" name="reg_tos" value="no" > 

                                <input type="checkbox" id="reg_tos" value="si" >&nbsp;Dolor garganta
								</label>                  
							
								<label class="checkbox-inline">
                                  <input type="hidden" name="reg_nasal" value="no" > 

                                <input type="checkbox" id="reg_nasal" value="si" >&nbsp;Congestion nasal
								</label>

								<label class="checkbox-inline">
                                  <input type="hidden" name="reg_difres" value="no" > 

                                <input type="checkbox" id="reg_difres" value="si" >&nbsp;Dificultad respiratoria
								</label>

								<label class="checkbox-inline">
                                  <input type="hidden" name="reg_fiebre" value="no" > 

                                <input type="checkbox" id="reg_fiebre" value="si" >&nbsp;Fiebre
								</label>

								<label class="checkbox-inline">
                                  <input type="hidden" name="reg_escalofrios" value="no" > 

                                <input type="checkbox" id="reg_tos" value="si" >&nbsp;Escalofrios
                                 </label>
							</br>
                          
                      
                        </div>
                     </div>
		
						<div class="col-lg-12">
							<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;Guardar</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
	<!-- Contenido -->

	<?php require_once("../MainJs/js.php");?>
	
	<script type="text/javascript" src="nuevoregistro.js"></script>

	<script type="text/javascript">
                         function mostrarcaso(){
                             document.getElementById('caso').style.display = 'block';
                         }
                     </script>
                     
                     <script type="text/javascript">
                         function ocultarcaso(){
                             document.getElementById('caso').style.display = 'none';
                         }
                     </script>

	</body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>