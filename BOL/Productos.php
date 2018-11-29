<?php
class Productos
{
	private $idProductos;
	private $nombre;
	private $precio;
	private $color;
	private $stock;
	private $marca;
	private $categoria;


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
