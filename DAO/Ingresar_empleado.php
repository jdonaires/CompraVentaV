<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/persona.php');
require_once('../BOL/login.php');

class Registrar_empleado
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
		$this->pdo = $dba->get_connection();
	}

	public function registrar(Persona $per, Login $log)
	{
		try
		{
        $nombres=$per->__GET('nombres');
        $apellidos=$per->__GET('apellidos');
        $correo=$per->__GET('correo');
        $dni=$per->__GET('dni');
        $telefono=$per->__GET('telefono');
        $fecnac=$per->__GET('fecnac');
        $sexo=$per->__GET('sexo');
				$usuario=$log->__GET('usuario');
				$clave=$log->__GET('clave');

          $statement = $this->pdo->prepare("call up_registro_empleado(?,?,?,?,?,?,?,?,?)");
          $statement->bindParam(1,$nombres);
  				$statement->bindParam(2,$apellidos);
  				$statement->bindParam(3,$correo);
          $statement->bindParam(4,$dni);
          $statement->bindParam(5,$telefono);
          $statement->bindParam(6,$fecnac);
          $statement->bindParam(7,$sexo);
          $statement->bindParam(8,$usuario);
          $statement->bindParam(9,$clave);
  				$statement->execute();


		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}

?>
