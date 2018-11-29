<?php
require_once('../BOL/Productos.php');
require_once('../DAO/Buscar_Producto.php');

$pro = new Productos();
$al = new Buscarproducto();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>TOMASSA_ELECTRICS</title>

    <link rel="shortcut icon" href="imagenes/logo.png"/>
    <link rel="stylesheet" type="text/css" href="Style/Posiciones.css">
    <link rel="stylesheet" type="text/css" href="Style/StyleVentas.css">
</head>

  <body>
    <FONT class="iniciox_ventas" SIZE="3">INICIO</FONT>
    <form class="posicion_Ventas_1">
    <label name="hola">ADMIN</label>
    <img src="imagenes/ejecutivo1.png" width="30" height="30"/>

  </form>


  <form class="posicion_Ventas_2">
      <h1>Datos</h1>
      <hr/  width="100%" align="left">
      <form>
      <h4>Fecha:</h4>
      <input  type="text" name="txtfecha" disabled="false" size="8%"  value="<?php echo date('Y-n-j'); ?>" />
      <h4>Señor(es): </h4>
      <input  type="text" name="nombreseñor" size="50%" >
     </form>
  </form>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" class="pure-form pure-form-stacked" style="margin-bottom:30px;">
  <div class="posicion_Ventas_3">
      <h1>Productos</h1>
      <hr/  width="60%" align="left">
      <h4>Nombre</h4>

      <input  type="text" name="nombree" size="20%"  >
      <input  type=submit name="buscar1" value="hola" width="30%" height="10%" >
      <h4>Marca: </h4>
      <input  type="text" disabled="false"  name="marca" size="50%"   >
      <h4>Precio: </h4>
      <input  type="text" disabled="false" name="precio" size="50%" >
      <h4>Cantidad: </h4>
      <input  type="text" name="cantidad" size="10%" >
      <input  type=image  src="Imagenes\logo.png" width="10%" height="10%" >

    </div>



      <div>

        <?php
        if(isset($_POST['buscar1']))
        {
        	$resultado = array();//VARIABLE TIPO RESULTADO
        	$pro->__SET('nombre',          $_POST['nombree']);//ESTABLECEMOS EL VALOR DEL DNI
        	$resultado = $al->Listar($pro); //CARGAMOS LOS REGISTRO EN EL ARRAY RESULTADO
        	if(!empty($resultado)) //PREGUNTAMOS SI NO ESTA VACIO EL ARRAY
        	{
        		?>

        		<?php
        		foreach( $resultado as $r): //RECORREMOS EL ARRAY RESULTADO A TRAVES DE SUS CAMPOS
        			?>

              <div class="posicion_Ventas_3">
                  <h1>Productos</h1>
                  <hr/  width="60%" align="left">
                  <h4>Nombre</h4>

                  <input  type="text" name="nombree" size="20%"  >
                  <input  type=submit name="buscar1" value="hola" width="30%" height="10%" >
                  <h4>Marca: </h4>
                  <input  type="text" disabled="false"  name="marca" size="50%" value="<?php echo $r->__GET('marca'); ?>"  >
                  <h4>Precio: </h4>
                  <input  type="text" disabled="false" name="precio" size="50%" value="<?php echo $r->__GET('precio'); ?>">
                  <h4>Cantidad: </h4>
                  <input  type="text" name="cantidad" size="10%" >
                  <input  type=image  src="Imagenes\logo.png" width="10%" height="10%" >

                </div>
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


        </div>



</form>
</body>
</html>
