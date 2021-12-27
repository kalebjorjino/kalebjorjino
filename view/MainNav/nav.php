<?php
    if ($_SESSION["rol_id"]==1){
        ?>
            <nav class="side-menu">
                <ul class="side-menu-list">
                    <li class="blue-dirty">
                        <a href="..\Home\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Inicio</span>
                        </a>
                    </li>
                    <li class="blue with-sub">
	            <span>
	                <i class="glyphicon glyphicon-th"></i>
	                <span class="lbl">Registro</span>
	            </span>
	            <ul>
                   
                    <li class="green-dirty">
                        <a href="..\NuevoRegistro\">
                            <span class="glyphicon glyphicon-th"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="lbl">Paciente</span>
                        </a>
                    </li>

                    <!--<li class="green-dirty">
                        <a href="..\Cuantificacion\">
                            <span class="glyphicon glyphicon-th"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="lbl">Cuantificaciòn</span>
                        </a>
                    </li>-->

                    <li class="green-dirty">
                        <a href="..\Sintomas\">
                            <span class="glyphicon glyphicon-th"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="lbl">Sintomas</span>
                        </a>
                    </li>

                    <!--<li class="green-dirty">
                        <a href="..\ControlEnvio\">
                            <span class="glyphicon glyphicon-th"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="lbl">Control Envio</span>
                        </a>
                    </li>-->

                    <!--<li class="green-dirty">
                        <a href="..\Especialista\">
                            <span class="glyphicon glyphicon-th"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="lbl">Especialista</span>
                        </a>
                    </li>-->

                   
	            </ul>
	        </li>
                   
            <li class="blue with-sub">
	            <span>
	                <i class="glyphicon glyphicon-th"></i>
	                <span class="lbl">Consultar Registro</span>
	            </span>
	            <ul>
                   
                    <li class="green-dirty">
                        <a href="..\ConsultarRegistro\">
                            <span class="glyphicon glyphicon-th"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="lbl">Paciente</span>
                        </a>
                    </li>
	               
	            </ul>
	        </li>
                   
                </ul>
            </nav>
        <?php
    }else{
        ?>
            <nav class="side-menu">
                <ul class="side-menu-list">
                    <li class="blue-dirty">
                        <a href="..\Home\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Inicio</span>
                        </a>
                    </li>
                    <li class="blue-dirty">
                        <a href="..\MntUsuario\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Usuario</span>
                        </a>
                    </li>
                    <li class="blue-dirty">
                        <a href="..\MntProveedor\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Proveedor</span>
                        </a>
                    </li>
                    <li class="blue-dirty">
                        <a href="..\Departamento\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Departamento</span>
                        </a>
                    </li>
                    <li class="blue-dirty">
                        <a href="..\ConsultarRegistro\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Consultar Registro</span>
                        </a>
                    </li>

                    <li class="green-dirty">
                        <a href="..\Categoria\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Categoria</span>
                        </a>
                    </li>

                    <li class="green-dirty">
                        <a href="..\Distrito\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Distrito</span>
                        </a>
                    </li>
                </ul>
            </nav>
        <?php
    }
?>
