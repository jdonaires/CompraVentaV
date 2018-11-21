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
						<form id="frm" class="form-horizontal" enctype="multipart/form-data">
							<section class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-user fa-fw">
									</i>
								</span>
							<input type="text"  id="idNombres" class="form-control" placeholder="Nombres">
							<br>
							</section>
              <br>
              <section class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-user fa-fw">
									</i>
								</span>
							<input type="text"  id="idApellidos" class="form-control" placeholder="Apellidos">
							<br>
							</section>
              <br>
              <section class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-map-o">
									</i>
								</span>
							<input type="text"  id="idDireccion" class="form-control" placeholder="Direccion">
							<br>
							</section>
              <br>
              <section class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-credit-card">
									</i>
								</span>
							<input type="text" id="idDNI" class="form-control" placeholder="DNI">
							<br>
							</section>
              <br>
              <section class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-phone">
									</i>
								</span>
							<input type="text"  id="idTelefono" class="form-control" placeholder="Telefono">
							<br>
							</section>
              <br>
              <section class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-calendar">
									</i>
								</span>
							<input type="date"  id="idFecha" class="form-control" placeholder="Fecha de Nacimiento">
							<br>
							</section>
              <br>
              <section class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-transgender">
									</i>
								</span>
                <input type="radio" name="IdSexo" value="1">Masculino
                <input type="radio" name="IdSexo" value="2">Femenino
                <input type="radio" name="IdSexo" value="3" checked>Sin Especificar
							</section>
						</form>
            <input type="submit" value="REGISTRAR" id="btnRegistrar" class="boton_azul" >
            <br><br>
            <form action="frmUsuarioEmpleado.php">
             <input type="submit" value="CANCELAR"  class="boton_azul" id="btnCancelar" >
           </form>
					</section>
				</section>
			</section>
		</main>

	</body>
</html>
