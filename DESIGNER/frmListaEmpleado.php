<?php
require_once('../BOL/Persona.php');
require_once('../DAO/ListaEmpleados.php');

$emp = new Persona();
$al = new ListaEmpleados();
?>

<html>
<head>
    <title>TOMASSA_ELECTRICS</title>
    <link rel="stylesheet" type="text/css" href="Style/style_tabla.css">
    <link rel="stylesheet" type="text/css" href="Style/Posiciones.css">
    <link rel="shortcut icon" href="imagenes/logo.png"/>
  </head>
  <body>
    <body>
      <form action="frmprincipal.php">
      <input  type=image id="uno" src="Imagenes\castverde.png" width="100" height="100" >
    </form>
    <h4>LISTA DE EMPLEADOS</h4>

       <?php
       $resultado = $al->mostrar();
       if(!empty($resultado)) //PREGUNTAMOS SI NO ESTA VACIO EL ARRAY
       {
       ?>

       <table class="pure-table pure-table-horizontal">
            <thead>
                <tr>
                    <th style="text-align:left;">Nombre</th>
                    <th style="text-align:left;">Apellido</th>
                    <th style="text-align:left;">Correo</th>
                    <th style="text-align:left;">DNI</th>
                    <th style="text-align:left;">Telefono</th>
                    <th style="text-align:left;">Fecha Nacimiento</th>
                    <th style="text-align:left;">Sexo</th>
                </tr>
            </thead>
        <?php
        session_start();//APERTURAMOS UNA SESSION
        foreach( $resultado as $r): //RECORREMOS EL ARRAY RESULTADO A TRAVES DE SUS CAMPOS
          ?>
            <tr>
                <td><?php echo $r->__GET('nombres'); ?></td>
                <td><?php echo $r->__GET('apellidos'); ?></td>
                <td><?php echo $r->__GET('correo'); ?></td>
                <td><?php echo $r->__GET('dni'); ?></td>
                <td><?php echo $r->__GET('telefono'); ?></td>
                <td><?php echo $r->__GET('fecnac'); ?></td>
                <td><?php echo $r->__GET('sexo'); ?></td>
            </tr>
            <?php $_SESSION['nombres']= $r->__GET('nombres');  ?>
            <?php $_SESSION['apellidos']= $r->__GET('apellidos'); ?>
            <?php $_SESSION['correo']= $r->__GET('correo'); ?>
            <?php $_SESSION['dni']= $r->__GET('dni'); ?>
            <?php $_SESSION['telefono']= $r->__GET('telefono'); ?>
            <?php $_SESSION['fecnac']= $r->__GET('fecnac'); ?>
            <?php $_SESSION['sexo']= $r->__GET('sexo'); ?>
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
