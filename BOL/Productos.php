<?php
class Productos
{
	private $idProductos;
	private $nombres;
	private $precio;
	private $color;
	private $stock;
	private $idMarcas;
	private $idCategorias;


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
