<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["us_id"])){ 
?>
<!DOCTYPE html>
<html>
    <?php require_once("../MainHead/head.php");?>
	<title>Registro PACIENTE</title>
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
							<h3>REGISTRO DEL PACIENTE</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Nuevo registro del Paciente</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<div class="box-typical box-typical-padding">
				<p>
					Desde esta ventana podra generar nuevos registros.
				</p>

				<h5 class="m-t-lg with-border">Ingresar Información</h5>

				<div class="row g-2">
					<form method="post" id="registro_form">

						<input type="hidden" id="us_id" name="us_id" value="<?php echo $_SESSION["us_id"] ?>">

							<fieldset class="form-group mb-3">
							          <div class="col-lg-2">
								           <label class="form-label semibold" for="reg_cod">Codigo Lab (*)</label>
								      </div>
								      <div class="col-lg-2">
								                  <input type="text" class="form-control" id="reg_cod" name="reg_cod" placeholder="Ingrese codigo..." required>												  
								      </div>
							</fieldset>

							<fieldset class="form-group mb-3">
							          <div class="col-lg-2">
								           <label class="form-label semibold" for="reg_fech">Fecha de Notificacion (*)</label>
								      </div>
								      <div class="col-lg-2">
								                  <input type="date" class="form-control" id="reg_fech" name="reg_fech" required>
								      </div>
							</fieldset>

							<fieldset class="form-group mb-3">
							          <div class="col-lg-2">
								           <label class="form-label semibold" for="estb_id">Ipress (*)</label>
							          </div>
							          <div class="col-lg-2">
								                  <select id="estb_id" name="estb_id" class="js-example-responsive" ></select>
							          </div>  
						   </fieldset>
 
						   <div class="col-lg-4">
						        <h5 class="m-t-lg with-border">Datos del Paciente</h5>
                           </div>


						   <div class="col-lg-6">
						        <fieldset class="form-group">
								          <label class="form-label semibold" for="reg_ape">Apellidos (*)</label>
								                 <input type="text" class="form-control" id="reg_ape" name="reg_ape" placeholder="Ingrese apellidos del paciente..." required>
							    </fieldset>
						   </div>

						   <div class="col-lg-6">
						        <fieldset class="form-group">
								          <label class="form-label semibold" for="reg_nom">Nombre (*)</label>
								                 <input type="text" class="form-control" id="reg_nom" name="reg_nom" placeholder="Ingrese nombres del paciente..." required>
							    </fieldset>
						   </div>

						   <div class="col-lg-4">
						        <fieldset class="form-group">
								          <label class="form-label semibold" for="reg_telefono">Telefono/Celular (*)</label>
								                 <input type="NUMBER" class="form-control" id="reg_telefono" name="reg_telefono" placeholder="Ingrese numero ..." required>
							    </fieldset>
						   </div>

						   <div class="col-lg-4">
						        <fieldset class="form-group">
								          <label class="form-label semibold" for="reg_doc">Documento de Identidad (*)</label>
								                 <input type="number" class="form-control" id="reg_doc" name="reg_doc" placeholder="Ingrese numero de documento..." required>
							    </fieldset>
						   </div>

						   <div class="col-lg-2">
						        <fieldset class="form-group">
								          <label class="form-label semibold" for="reg_edad">Edad (*)</label>
								                 <input type="number" class="form-control" id="reg_edad" name="reg_edad" placeholder="Ingrese edad del paciente..." required>
							    </fieldset>
						   </div>

						   <div class="col-lg-2">
						        <fieldset class="form-group">
								          <label class="form-label semibold" for="reg_peso">Peso (*)</label>
								                 <input type="number" class="form-control" id="reg_peso" name="reg_peso" placeholder="Ingrese edad del paciente..." required>
							    </fieldset>
						   </div>

						   <div class="col-lg-2">
						        <fieldset class="form-group">
								          <label class="form-label semibold" for="reg_talla">Talla (*)</label>
								                 <input type="number" class="form-control" id="reg_talla" name="reg_talla" placeholder="Ingrese edad del paciente..." required>
							    </fieldset>
						   </div>


						    <div class="col-lg-2">
                                 <fieldset class="form-group">
	                                       <label class="form-label semibold" for="gen">Genero (*)</label>
	                                              <input type="radio" name="gen" value="masculino">&nbsp;Masculino&nbsp;&nbsp;&nbsp;&nbsp;
	                                              <input type="radio" name="gen" value="femenino">&nbsp;Femenino
                                 </fieldset>
                            </div>
						
							<div class="col-lg-2">
							     <fieldset class="form-group">
								           <label class="form-label semibold" for="depa_id">Departamento (*)</label>
								                  <select id="depa_id" name="depa_id" class="js-example-responsive"></select>
							     </fieldset>
						    </div>

						    <div class="col-lg-2">
							     <fieldset class="form-group">
								           <label class="form-label semibold" for="provin_id">Provincia (*)</label>
								                  <select id="provin_id" name="provin_id" class="js-example-responsive"></select>
							     </fieldset>
						    </div>

						    <div class="col-lg-2">
							     <fieldset class="form-group">
								           <label class="form-label semibold" for="dist_id">Distrito (*)</label>
								                  <select id="dist_id" name="dist_id" class="js-example-responsive"></select>
							     </fieldset>
						    </div>

						    <div class="col-lg-4">
							     <fieldset class="form-group">
								           <label class="form-label semibold" for="nacion_id">Nacionalidad (*)</label>
								                  <select id="nacion_id" name="nacion_id" class="js-example-responsive"></select>
							     </fieldset>
						   </div>

						   <div class="col-lg-9">
						        <fieldset class="form-group">
								          <label class="form-label semibold" for="reg_direccion">Direccion (*)</label>
								                 <input type="text" class="form-control" id="reg_direccion" name="reg_direccion" placeholder="Ingrese direccion..." required>
							    </fieldset>
						   </div>

							
						   <div class="col-lg-12">
							    <fieldset class="form-group">
								          <label class="form-label semibold" for="reg_descrip">Observaciones (*)</label>
						        <div class="summernote-theme-1">
									             <textarea id="reg_descrip" name="reg_descrip" class="summernote" name="name"></textarea>
						        </div>
							    </fieldset>
						   </div>

						   <div class="col-lg-12">
							    <button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-warning">Guardar</button>
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