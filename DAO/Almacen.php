<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/Productos.php');
require_once('../BOL/Marcas.php');

class Almacen
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();
	}

	public function mostrar()
	{
		try
		{
			$result = array();

			$statement = $this->pdo->prepare("call up_almacen2()");
			$statement->execute();

			foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$pro = new Productos();
        //$ca = new Categorias();

				$pro->__SET('nombre', $r->nombre);
				$pro->__SET('marca', $r->marca);
        //$pro->__SET('color', $r->color);
        //$pro->__SET('stock', $r->stock);
        //$mar->__SET('descripcion', $r->marcas);
        //$ca->__SET('descripcion', $r->categorias);

				$result[] = $pro;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
}


 ?>
