<?php
class Empleados
{
	private $idEmpleados;
	private $Nombres;
	private $Apellidos;
	private $Direccion;
	private $Dni;
	private $Telefono;
	private $FechaNac;
	private $Sexo;

	public function __GET($x)
	{
		return $this->$x;
	}
	public function __SET($x, $y)
	{
		return $this->$x = $y;
	}
}
?>
