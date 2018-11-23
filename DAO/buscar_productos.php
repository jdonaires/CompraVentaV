<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/Productos.php');
require_once('../BOL/Marcas.php');
require_once('../BOL/Categorias.php');

class Registrar_producto
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
		$this->pdo = $dba->get_connection();
	}

  public function Listar(Productos $prod)
  	{
  		try
  		{
  			$result = array();
  			$nombres=$prod->__GET('nombres');

  			$statement = $this->pdo->prepare("call up_buscar_producto(?)");
  			$statement->bindParam(1,$nombres);
  			$statement->execute();

  			foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
  			{
  				$pro = new Productos();


  				$pro->__SET('nombres', $r->nombres);
  				$pro->__SET('precio', $r->precio);
  				$pro->__SET('stock', $r->stock);



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
