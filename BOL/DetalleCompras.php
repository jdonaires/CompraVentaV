<?php
class DetalleCompras
{
	private $idDetalleCompras;
	private $Cantidad;
	private $Precio;
	private $idcompra;
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
