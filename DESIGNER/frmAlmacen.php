<?php
require_once('../DAL/DBAccess.php');

    $dba = new DBAccess();
    $this->pdo = $dba->get_connection();

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
        $RefCAllSp = $pdo->prepare("CALL up_almacen()");
        $username= "mouse";
        $RefCAllSp->bind_param('s',$username);
        $RefCAllSp->execute();
        $RefCAllSp->bind_result($nombres,$descripcion);
        while ($RefCAllSp->fe tch()) {
          echo "$nombres,$descripcion,";
        }
      ?>
      </table>

    </fieldset>
  </body>
</html>
