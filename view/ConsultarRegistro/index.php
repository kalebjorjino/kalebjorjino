<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["us_id"])){ 
?>
<!DOCTYPE html>
<html>
    <?php require_once("../MainHead/head.php");?>
	<title>PMAC-AU::Consultar Registro</title>
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
							<h3>Consultar Registro</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Consultar Registro</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<div class="box-typical box-typical-padding">
				<table id="registro_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
					<thead>
						<tr>
							<th style="width: 2%;">Nro.Registro</th>
							<th class="d-none d-sm-table-cell" style="width: 5%;">Cod-Covid</th>
							<th class="d-none d-sm-table-cell" style="width: 10%;">Establecimiento</th>
							<th class="d-none d-sm-table-cell" style="width: 10%;">Apellidos</th>
							<th class="d-none d-sm-table-cell" style="width: 10%;">Nombres</th>
							<th class="d-none d-sm-table-cell" style="width: 5%;">Documento</th>
							<th class="d-none d-sm-table-cell" style="width: 2%;">Edad</th>
							<th class="d-none d-sm-table-cell" style="width: 2%;">Estado</th>
							<th class="d-none d-sm-table-cell" style="width: 2%;">Fecha de Creacion</th>
							<th style="width: 2%;"></th>
							<th style="width: 2%;"></th>
							<th style="width: 2%;"></th>

						</tr>
					</thead>
					<tbody>

					</tbody>
				</table>
			</div>

		</div>
	</div>
	<!-- Contenido -->
    
	<?php require_once("../MainJs/js.php");?>
	
	<script type="text/javascript" src="consultaregistro.js"></script>

	<?php require_once("../NuevoRegistro/modalregistro.php");?>

<script type="text/javascript" src="../NuevoRegistro/mntregistro.js"></script>
	

</body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>