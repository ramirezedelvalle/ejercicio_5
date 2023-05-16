<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

abstract class Vehiculos {
    protected $color;
    public $marca;
    protected $modelo;
    public static $tipo = "Sedán";

    public function __construct($color, $marca, $modelo) {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    final public static function getTipo() {
        echo "El vehiculo es tipo " . self::$tipo;
    }

    public function getInfo(): void {
        echo "El vehiculo es de la marca $this->marca, de color $this->color";
    }

    public function getCantidad(): void {
        echo "El vehiculo es modelo $this->modelo";
    }
}

class Mercedes extends Vehiculos {
    public function __construct($modelo = "", $color = "", $marca = "") {
        parent::__construct($color, $marca, $modelo);
    }

    public function getInfo(): void {
        echo "El vehiculo es de color $this->color, marca $this->marca, modelo $this->modelo, y tipo " . parent::$tipo;
    }
}

class McLaren extends Vehiculos {
    public function getInfo(): void {
        echo "El vehiculo es de color $this->color, marca $this->marca, modelo $this->modelo, y tipo " . parent::$tipo;
    }
}

$carro = new Mercedes("CLK-150", "Rojo", "2020");
$carro->getInfo();
echo "<br>";
$carro->getCantidad();
echo "<br>";
echo "<br>";

$importado = new McLaren("Negro", "McLaren", "Deportivo");
$importado->getInfo();
echo "<br>";
$importado->getCantidad();
echo "<br>";
?>