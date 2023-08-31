<?php
namespace Model;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class Propiedad extends ActiveRecord {

  protected static $columnasDB =['id','titulo','precio','imagen','descripcion','habitaciones','wc','estacionamiento','creado','vendedorId'];

  protected static $tabla = 'propiedades';

  public $id;
  public $titulo;
  public $precio;
  public $imagen;
  public $descripcion;
  public $habitaciones;
  public $wc;
  public $estacionamiento;
  public $creado;
  public $vendedorId;

    public function __construct($args=[])
  {
    $this->id = $args['id'] ?? NULL;
    $this->titulo = $args['titulo'] ?? '';
    $this->precio = $args['precio'] ?? '';
    $this->imagen = $args['imagen'] ?? '';
    $this->descripcion = $args['descripcion'] ?? '';
    $this->habitaciones = $args['habitaciones'] ?? '';
    $this->wc = $args['wc'] ?? '';
    $this->estacionamiento = $args['estacionamiento'] ?? '';
    $this->creado = date('Y/m/d');
    $this->vendedorId = $args['vendedorId'] ?? '';
  }

  public function validar() {
      if(!$this->titulo) {
				self::$errores[] = "Debes añadir un título";
			}

			if(!$this->precio) {
				self::$errores[] = "El precio es obligatorio";
			}
			
			if( strlen($this->descripcion) < 50 ) {
				self::$errores[] = "La descripcion es obligatorio y debe tener al menos 50 caracteres";
			}

			if(!$this->habitaciones) {
				self::$errores[] = "El numero de habitaciones es obligatorio";
			}
				if(!$this->wc) {
				self::$errores[] = "El numero de baños es obligatorio";
			}
				if(!$this->estacionamiento) {
				self::$errores[] = "El numero de estacionamiento es obligatorio";
			}
			if(!$this->vendedorId) {
				self::$errores[] = "Elige un vendedor";
			}

			if(!$this->imagen ) {
				self::$errores[] = "La imagen de la propiedad es obligatoria";
			}
      return self::$errores;
  }
}
