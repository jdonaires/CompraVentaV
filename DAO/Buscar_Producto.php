<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/Productos.php');

class Buscarproducto
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
  			$nombre=$prod->__GET('nombre');

  			$statement = $this->pdo->prepare("call up_buscar_productos(?)");
  			$statement->bindParam(1,$nombre);
  			$statement->execute();

  			foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
  			{
  				$pro = new Productos();


  				$pro->__SET('nombre', $r->nombre);
  				$pro->__SET('marca', $r->marca);
  				$pro->__SET('precio', $r->precio);

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
