<?php
require_once('../BOL/Productos.php');
require_once('../BOL/Marcas.php');
require_once('../BOL/Categorias.php');
require_once('../DAO/Almacen.php');

$pro = new Productos();
$mar = new Marcas();
$ca = new Categorias();
$al = new Almacen();

?>

<html>
<head>
    <title>TOMASSA_ELECTRICS</title>
    <link rel="stylesheet" type="text/css" href="Style/styletabla.css">
    <link rel="shortcut icon" href="imagenes/logo.png"/>
  <body>
    <h4>ALMACEN</h4>
     <fieldset>
       <?php
       $resultado = $al->mostrar();
       if(!empty($resultado)) //PREGUNTAMOS SI NO ESTA VACIO EL ARRAY
       {
       ?>
       <table class="pure-table pure-table-horizontal">
            <thead>
                <tr>
                    <th style="text-align:left;">Nombre</th>
                    <th style="text-align:left;">marca</th>
                </tr>
            </thead>
        <?php
        session_start();//APERTURAMOS UNA SESSION
        foreach( $resultado as $r): //RECORREMOS EL ARRAY RESULTADO A TRAVES DE SUS CAMPOS
          ?>
            <tr>
                <td><?php echo $r->__GET('nombre'); ?></td>
                <td><?php echo $r->__GET('marca'); ?></td>
            </tr>
            <?php $_SESSION['nombre']= $r->__GET('nombre'); ?>
            <?php $_SESSION['marca']= $r->__GET('marca'); ?>
            <?php endforeach;
      }
      else
      {
        echo 'no se encuentra en la base de datos!';
      }
      ?>
      </table>
      <?php

    ?>
    </fieldset>
  </body>
</html>
