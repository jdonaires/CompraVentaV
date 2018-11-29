<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/Persona.php');
class ListaEmpleados
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

			$statement = $this->pdo->prepare("call up_ListaEmpleados()");
			$statement->execute();

			foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$emp = new Persona();

				$emp->__SET('nombres', $r->nombres);
				$emp->__SET('apellidos', $r->apellidos);
				$emp->__SET('correo', $r->correo);
				$emp->__SET('dni', $r->dni);
				$emp->__SET('telefono', $r->telefono);
				$emp->__SET('fecnac',$r->fecnac);
        $emp->__SET('sexo',$r->sexo);


				$result[] = $emp;
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
