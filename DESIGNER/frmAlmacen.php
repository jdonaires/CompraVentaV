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
    <link rel="stylesheet" type="text/css" href="Style/style_tabla.css">
    <link rel="stylesheet" type="text/css" href="Style/Posiciones.css">
    <link rel="shortcut icon" href="imagenes/logo.png"/>
    </head>
  <body>
    <form action="frmprincipal.php">
    <input  type=image id="uno" src="Imagenes\castverde.png" width="100" height="100" >
  </form>
    <h4>ALMACEN</h4>
       <?php
       $resultado = $al->mostrar();
       if(!empty($resultado)) //PREGUNTAMOS SI NO ESTA VACIO EL ARRAY
       {
       ?>

       <table class="pure-table pure-table-horizontal">
            <thead>
                <tr>
                    <th style="text-align:left;">Nombre</th>
                    <th style="text-align:left;">Precio</th>
                    <th style="text-align:left;">Color</th>
                    <th style="text-align:left;">Stock</th>
                    <th style="text-align:left;">marca</th>
                    <th style="text-align:left;">categoria</th>
                </tr>
            </thead>
        <?php
        session_start();//APERTURAMOS UNA SESSION
        foreach( $resultado as $r): //RECORREMOS EL ARRAY RESULTADO A TRAVES DE SUS CAMPOS
          ?>
            <tr>
                <td><?php echo $r->__GET('nombre'); ?></td>
                <td><?php echo $r->__GET('precio'); ?></td>
                <td><?php echo $r->__GET('color'); ?></td>
                <td><?php echo $r->__GET('stock'); ?></td>
                <td><?php echo $r->__GET('marca'); ?></td>
                <td><?php echo $r->__GET('categoria'); ?></td>
            </tr>
            <?php $_SESSION['nombre']= $r->__GET('nombre'); ?>
            <?php $_SESSION['precio']= $r->__GET('precio'); ?>
            <?php $_SESSION['color']= $r->__GET('color'); ?>
            <?php $_SESSION['stock']= $r->__GET('stock'); ?>
            <?php $_SESSION['marca']= $r->__GET('marca'); ?>
            <?php $_SESSION['categoria']= $r->__GET('categoria'); ?>
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
  </body>
</html>
