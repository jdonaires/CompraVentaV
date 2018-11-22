<?php
class DetalleVentas
{
	private $idDetalleVentas;
	private $Cantidad;
	private $Precio;
	private $idVentas;
	private $idProductos;



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
