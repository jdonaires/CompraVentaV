<?php
require_once ('../DAO/Ingresar_empleado.php');
require_once ('../BOL/Productos.php');


$per = new Persona();
$log = new Login();
$model = new Registrar_empleado();

if(isset($_REQUEST['registrar']))
{
	

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
							<input type="text"  name="nombres" class="form-control" placeholder="Nombres">
							<br>
							</section>
              <br>
              <section class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-user fa-fw">
									</i>
								</span>
							<input type="text"  name="descripcion" class="form-control" placeholder="Descripcion">
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
              <input type="submit" value="buscar" name="buscar" class="boton_azul" >
					</section>
				</section>
			</section>
		</main>
  </form>
  </form>
  <?php
if(isset($_POST['buscar']))
{
	$resultado = array();//VARIABLE TIPO RESULTADO
	$pro->__SET('nonbres',          $_POST['nombres']);//ESTABLECEMOS EL VALOR DEL DNI
	$resultado = $model->Listar($pro); //CARGAMOS LOS REGISTRO EN EL ARRAY RESULTADO
	if(!empty($resultado)) //PREGUNTAMOS SI NO ESTA VACIO EL ARRAY
	{
		?>
		<table class="pure-table pure-table-horizontal">
				<thead>
						<tr>

								<th style="text-align:left;">Nombres</th>
								<th style="text-align:left;">Marcas</th>
								<th style="text-align:left;">Precio</th>
								<th style="text-align:left;">Stock</th>


						</tr>
				</thead>
		<?php
		foreach( $resultado as $r): //RECORREMOS EL ARRAY RESULTADO A TRAVES DE SUS CAMPOS
			?>
				<tr>

						<td><?php echo $r->__GET('nombres'); ?></td>
						<td><?php echo $r->__GET('precio'); ?></td>
						<td><?php echo $r->__GET('stock'); ?></td>

				</tr>
		<?php endforeach;
	}
	else
	{
		echo 'no se encuentra en la base de datos!';
	}
	?>
	</table>
	<?php
}
?>

	</body>
</html>
