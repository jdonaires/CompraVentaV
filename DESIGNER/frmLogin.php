<?php
require_once ('../DAO/ValidacionLogin.php');
require_once ('../BOL/login.php');
require_once('../BOL/persona.php');

$per = new Persona();

$log = new Login();
$perLogin = new loginingresar();
if(isset($_POST['ingresar']))
{
  $resultado = array();//VARIABLE TIPO RESULTADO
  $log->__SET('usuario',          $_POST['usuario']);//ESTABLECEMOS EL VALOR DEL DNI
  $log->__SET('clave',          $_POST['clave']);//ESTABLECEMOS EL VALOR DEL DNI
  $resultado = $perLogin->Acceder($log); //CARGAMOS LOS REGISTRO EN EL ARRAY RESULTADO
  if(!empty($resultado)) //PREGUNTAMOS SI NO ESTA VACIO EL ARRAY
  {
      header('location:frmprincipal.php');
  }else{
    header('location:frmLogin.php');
  }
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    	<!--meta http-equiv="refresh" content=".5"-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Compras y Ventas</title>
		<link rel="shortcut icon" href="imagenes/logo.png"/>
		<link rel="stylesheet" type="text/css" href="Style/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="Style/style_sige.css">
		<link rel="stylesheet" type="text/css" href="views/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	</head>
	<body>
		<section class="wrapper">
			<br><br>
			<hr class="featurette-divider">
		</section>
		<section class="wrapper">
			<br>
		</section>
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
						<img src="imagenes/logo.png" width="150" height="150"/>
						<h3 class="letras">INISIAR SESIÓN</h3>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" class="pure-form pure-form-stacked" style="margin-bottom:30px;">
						<form id="frm" class="form-horizontal" enctype="multipart/form-data">
							<section class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-user fa-fw">
									</i>
								</span>
							<input type="text" name="usuario" class="form-control" placeholder="Usuario">
							<br>
							</section>
							<br>
							<section class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-key fa-fw"></i>
								</span>
								<input type="password" name="clave" class="form-control"  placeholder="Clave">
							</section>
							<br>
							<input type="submit" value="INICIAR SESION" name="ingresar" class="boton_1" ></a>
						</form>
            </form>
					</section>
				</section>
			</section>
		</main>
		<br><br>
		<section class="wrapper">
			<br>
		</section>
		<br>
		<section class=" wrapper">
			<br><br><br>
		</section>
	</body>
</html>
