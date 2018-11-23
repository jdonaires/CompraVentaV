<!DOCTYPE html>
<html lang="es">
<head>
    <title>TOMASSA_ELECTRICS</title>

    <link rel="shortcut icon" href="imagenes/logo.png"/>
    <link rel="stylesheet" type="text/css" href="Style/Posiciones.css">
    <link rel="stylesheet" type="text/css" href="Style/StyleVentas.css">
</head>
  <body>
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
  <div class="posicion_Ventas_3">
      <h1>Productos</h1>
      <hr/  width="60%" align="left">
      <h4>Nombre</h4>
      <input  type="text" name="nombre" size="20%"/>
      <input  type=image  src="Imagenes\lupa.png" width="30%" height="10%" >
      <h4>Descripcion: </h4>
      <input  type="text" disabled="false"  name="descripcion" size="50%" >
      <h4>Precio: </h4>
      <input  type="text" disabled="false" name="precio" size="50%" >
      <h4>Cantidad: </h4>
      <input  type="text" name="cantidad" size="10%" >
      <input  type=image  src="Imagenes\logo.png" width="10%" height="10%" >
      <input class="btn_inicio" type=image src="Imagenes\castverde.png" width="100"
          height="100">
    </div>

    <fieldset class="posicion_Ventas_4">
      <div>



        </div>
    </fieldset>



</body>
</html>
