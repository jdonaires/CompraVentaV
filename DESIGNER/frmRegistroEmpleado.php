<?php
require_once ('../DAO/Ingresar_empleado.php');
require_once ('../BOL/login.php');
require_once('../BOL/persona.php');

$per = new Persona();
$log = new Login();
$model = new Registrar_empleado();

if(isset($_REQUEST['registrar']))
{
			$per->__SET('nombres',          $_POST['nombres']);
      $per->__SET('apellidos',        $_POST['apellidos']);
      $per->__SET('correo',           $_POST['correo']);
      $per->__SET('dni',           $_POST['dni']);
      $per->__SET('telefono',           $_POST['telefono']);
      $per->__SET('fecnac',           $_POST['fecnac']);
      $per->__SET('sexo',           $_POST['sexo']);
      $log->__SET('usuario',           $_POST['usuario']);
      $log->__SET('clave',           $_POST['clave']);
			$model->registrar($per,$log);
}else if (isset($_REQUEST['cancelar'])) {
  header('location:frmUsuarioEmpleado.php');
}

 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registro Empleado</title>
    <link rel="stylesheet" type="text/css" href="Style/bootstrap.min.css">
		<link rel="shortcut icon" href="imagenes/logo.png"/>
    <link rel="stylesheet" type="text/css" href="Style/style_sige.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	</head>
	<body>
    <section class="wrapper">
			<br>
			<hr class="featurette-divider">
		</section>
		<section class="wrapper">
			<br>
		</section>
    <img src="Imagenes/logo.png" width="280" height="280" align="right"/>
    <main class="container">
			<section class="row">
				<section class="col-sm-4">
				</section>
				<section class="col-sm-4">
					<section id="logeo" class="text-center">
						<section>
							<br>
							<h3 class="letras" >TOMASSA ELECTRIC</h3>
						</section>
						<h3 class="letras">Registro</h3>
            <form action="?action=registrar" method="post" class="pure-form pure-form-stacked" style="margin-bottom:30px;">
						<form id="frm" class="form-horizontal" enctype="multipart/form-data">
							<section class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-user fa-fw">
									</i>
								</span>
							<input type="text"  name="nombres" class="form-control" placeholder="Nombres">
							<br>
							</section>
              <br>
              <section class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-user fa-fw">
									</i>
								</span>
							<input type="text"  name="apellidos" class="form-control" placeholder="Apellidos">
							<br>
							</section>
              <br>
              <section class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-user fa-fw">
                  </i>
                </span>
              <input type="text"  name="correo" class="form-control" placeholder="Correo">
            </section>
            <br>
              <section class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-credit-card">
									</i>
								</span>
							<input type="text" name="dni" class="form-control" placeholder="DNI">
							<br>
							</section>
              <br>
              <section class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-phone">
									</i>
								</span>
							<input type="text"  name="telefono" class="form-control" placeholder="Telefono">
							<br>
							</section>
              <br>

              <section class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-calendar">
									</i>
								</span>
							<input type="date"  name="fecnac" class="form-control" placeholder="Fecha de Nacimiento">
							<br>
              </section>
	            <br>

              <section class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-user fa-fw">
                  </i>
                </span>
              <input type="text"  name="sexo" class="form-control" placeholder="Sexo">
            </section>



            <br>
            <section class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-user fa-fw">
                </i>
              </span>
            <input type="text"  name="usuario" class="form-control" placeholder="Usuario">
          </section>
          <br>

          <section class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-key">
              </i>
            </span>
            <input type="text"  name="clave" class="form-control" placeholder="Contraseña">
            <br>
          </section>
          <br>



            	<input type="submit" value="Registrar" name="registrar" class="boton_azul" >
            <br><br>
             <input type="submit" value="cancelar" name="cancelar" class="boton_azul" >
					</section>
				</section>
			</section>
		</main>
  </form>
  </form>


	</body>
</html>
