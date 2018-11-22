<?php
class Persona
{
	private $id;
	private $nombres;
	private $apellidos;
	private $correo;
	private $dni;
	private $telefono;
	private $fecnac;
	private $sexo;

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
