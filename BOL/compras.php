<?php
class Compras
{
	private $idcompra;
	private $FechaComp;
	private $SubTotal;
	private $Igv;
	private $Total;
	private $HoraCompra;
	private $idProveedores;
	private $idEmpleados;
	private $idTipoPago;

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
