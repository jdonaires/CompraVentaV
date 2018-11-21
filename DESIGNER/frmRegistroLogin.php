<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <!--meta http-equiv="refresh" content=".5"-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registro Usuario</title>


    <!--Para que tenga diseño-->
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
            <br><br><br>
            <h3 class="letras">Registro Usuario</h3>
						<form id="frm" class="form-horizontal" enctype="multipart/form-data">
							<section class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-user fa-fw">
									</i>
								</span>
                <!--Para poder establecer la unión con el empleado y el login por medio del nombre del empleado -->
							<input type="text"  name="nombreEmpleado" class="form-control" placeholder="Nombre Empleado">
              <br>
							</section>
              <br>
              <section class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-user fa-fw">
									</i>
								</span>
							<input type="text"  name="usuario" class="form-control" placeholder="Usuario">
							<br>
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
						</form>
            <br>
            <input type="submit" value="REGISTRAR" id="btnRegistrar" class="boton_azul" >
            <br><br>
            <form action="frmUsuarioEmpleado.php">
              <input type="submit" value="CANCELAR" id="btnCancelar" class="boton_azul" >
            </form>
					</section>
				</section>
			</section>
    </main>


	</body>
</html>
