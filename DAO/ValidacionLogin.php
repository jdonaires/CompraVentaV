<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/persona.php');
require_once('../BOL/login.php');

class Loginingresar
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
		$this->pdo = $dba->get_connection();
	}

	public function Acceder(Login $log)
	{
		try
		{
				$usuario=$log->__GET('usuario');
				$login=$log->__GET('clave');
				$result = array();

				$statement = $this->pdo->prepare("call up_registrarse(?,?)");
				$statement->bindParam(1,$usuario);
				$statement->bindParam(2,$login);
				$statement->execute();
				foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$per = new Persona();

				$per->__SET('dni', $r->dni);
				$per->__SET('nombres', $r->apellidos_nombres);

				$result[] = $per;

			}

			return $result;



		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}

?>
