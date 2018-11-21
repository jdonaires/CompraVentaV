<!DOCTYPE html>
<html>
  <head>
    <title>TOMASSA_ELECTRICS</title>
      <link rel="shortcut icon" href="imagenes/logo.png"/>
    	<link rel="stylesheet" type="text/css" href="Style/Style1.css">
      <link rel="stylesheet" type="text/css" href="Style/Posiciones.css">
      <script type="text/javascript" src="Function/fntion.js"></script>
  </head>
  <body>

  <div id="sidebar" class="sidebar" style="width: 0px;">
    <a href="#" class="boton-cerrar" onclick="ocultar()">X</a>
    <ul class="menu">
        <li><a href="#" >Inicio</a></li>
        <li><a href="frmUsuarioEmpleado.php" >Registro</a></li>
        <li><a href="#" >Ventas</a></li>
        <li><a href="#">Compras</a></li>
        <li><a href="#">Almacen</a></li>
    </ul>
  </div>

  <div class="posicion_1" id="contenido" style="margin-left: 0px;">
      <p><a target="_blank">
        <img src="Imagenes/logo.png"  width=30% height=30%  style="border-width: 10px" ></a></p>

      <h1><font face= "Comic Sans MS" size="25"> TOMASSA ELECTRICS</font></h1>
      <a id="abrir" class="abrir-cerrar" href="javascript:void(0)" onclick="mostrar()" style="display: inline;">BIENVENIDO-INGRESAR AL MENU</a><a id="cerrar" class="abrir-cerrar" href="#" onclick="ocultar()" style="display: none;">Cierra el menu</a>
  </div>
