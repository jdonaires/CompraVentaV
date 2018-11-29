<?php


 ?>
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

  <div id="sidebar" class="sidebar" onmouseover="mostrar()" onmouseout="ocultar()" style="width: 30px;">

    <ul class="menu">
        <li><a href="#" >  Inicio</a></li>
        <li><a href="frmUsuarioEmpleado.php"> <img src="Imagenes/ejecutivo1.png"  width=30% height=30%  >Registro</a></li>
        <li><a href="Ventass.php"><img src="Imagenes/logo.png"  width=30% height=30%  > Ventas</a></li>
        <li><a href="#"><img src="Imagenes/compras.png"  width=30% height=30%   >Compras</a></li>
        <li><a href="frmAlmacen.php"><img src="Imagenes/warehouse.png"  width=30% height=30%   >Almacen</a></li>
        <li><a href="frmLogin.php"><img src="Imagenes/salir.png"  width=30% height=30%   >Cerrar Sesión</a></li>
        <li><a href="frmListaEmpleado.php"><img src="Imagenes/empleado.png"  width=30% height=30%   >Lista Empleados</a></li>
    </ul>
  </div>


  <div class="posicion_1" id="contenido" style="margin-left: 0px;">
      <p><a target="_blank">
        <img src="Imagenes/logo.png"  width=30% height=30%  style="border-width: 10px" ></a></p>

      <h1><font face= "Comic Sans MS" size="25"> TOMASSA ELECTRICS</font></h1>
      <a id="abrir" class="abrir-cerrar" href="javascript:void(0)" onclick="mostrar()" style="display: inline;">BIENVENIDO-INGRESAR AL MENU</a>
      <a id="cerrar" class="abrir-cerrar" href="#" onclick="ocultar()" style="display: none;">Cierra el menu</a>
  </div>
  <form class="posicion_principal">
  <label name="hola"><?php session_start(); echo $_SESSION['apellidos_y_nombres']; ?></label>
  <img src="imagenes/ejecutivo1.png" width="30" height="30"/>
