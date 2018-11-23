<?php
class Productos
{
	private $idProductos;
	private $Nombres;
	private $Descripcion;
	private $Precio;
	private $Color;
	private $Stock;
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
