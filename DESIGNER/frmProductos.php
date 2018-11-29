<?php
require_once ('../DAO/Registro_producto.php');
require_once ('../BOL/Productos.php');

$pro = new Productos();
$model = new Registrar_producto();

if(isset($_REQUEST['registrar']))
{
  $pro->__SET('nombre',          $_POST['nombre']);
  $pro->__SET('precio',        $_POST['precio']);
  $pro->__SET('color',           $_POST['color']);
  $pro->__SET('stock',           $_POST['stock']);
  $pro->__SET('marca',           $_POST['marca']);
  $pro->__SET('categoria',           $_POST['categoria']);
  $model->registrar($pro);

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
		<title>Registro Producto</title>
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
						<h3 class="letras">Registro de Productos</h3>
            <form action="?action=registrar" method="post" class="pure-form pure-form-stacked" style="margin-bottom:30px;">
						<form id="frm" class="form-horizontal" enctype="multipart/form-data">
							<section class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-laptop">
									</i>
								</span>
							<input type="text"  name="nombre" class="form-control" placeholder="Nombres">
							<br>
							</section>
              <br>
              <section class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-usd">
                  </i>
                </span>
              <input type="text"  name="precio" class="form-control" placeholder="Precio">
            </section>
            <br>
              <section class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-paint-brush">
									</i>
								</span>
							<input type="text" name="color" class="form-control" placeholder="Color">
							<br>
							</section>
              <br>
              <section class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-stack-overflow">
									</i>
								</span>
							<input type="text"  name="stock" class="form-control" placeholder="Stock">
							<br>
							</section>
              <br>

              <section class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-cogs">
									</i>
								</span>
							<input type="text"  name="marca" class="form-control" placeholder="Marca">
							<br>
              </section>
	            <br>
              <section class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-th-large">
                  </i>
                </span>
              <input type="text"  name="categoria" class="form-control" placeholder="Categoria">
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
