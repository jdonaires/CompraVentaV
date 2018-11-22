<?php
class Ventas
{
	private $idVentas;
	private $FechaVenta;
	private $Subtotal;
	private $Igv;
	private $Total;
	private $HoraVenta;
	private $idEmpleados;
	private $idClientes;
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
