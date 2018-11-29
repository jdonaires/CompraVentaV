<?php
class Productos
{
	private $idProductos;
	private $nombre;
	private $precio;
	private $color;
	private $stock;
	private $id_marca;
	private $id_categoria;


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
