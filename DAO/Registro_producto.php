<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/Productos.php');

class Registrar_producto
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
		$this->pdo = $dba->get_connection();
	}

	public function registrar(Productos $pro)
	{
		try
		{
        $nombre=$pro->__GET('nombre');
        $precio=$pro->__GET('precio');
        $color=$pro->__GET('color');
        $stock=$pro->__GET('stock');
        $marca=$pro->__GET('marca');
        $categoria=$pro->__GET('categoria');

          $statement = $this->pdo->prepare("call up_registro_producto(?,?,?,?,?,?)");
          $statement->bindParam(1,$nombre);
  				$statement->bindParam(2,$precio);
  				$statement->bindParam(3,$color);
          $statement->bindParam(4,$stock);
          $statement->bindParam(5,$marca);
          $statement->bindParam(6,$categoria);
  				$statement->execute();


		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}

?>
