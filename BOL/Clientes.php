<?php
class Clientes
{
	private $idClientes;
	private $Nombres;
	private $Apellidos;
	private $Direccion;
	private $Dni;


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
