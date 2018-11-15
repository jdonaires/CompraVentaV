<?php
class Proveedores
{
	private $idProveedores;
	private $RazonSocial;
	private $Direccion;
	private $Ruc;
	private $Telefono;
	private $Email;


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
