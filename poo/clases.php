<?php

class Persona {
    // Atributos - Propiedades
    public $nombre;
    private $edad; 
    public $pais;


    public function __construct($nombre, $edad, $pais) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    // Método para mostrar la información de la persona
    public function mostrarInformacion() {
        echo "{$this->nombre} tiene {$this->edad} años.";
    }

    // Método para cambiar la edad de la persona
    public function cambiarEdad($nuevaEdad) {
        $this->edad = $nuevaEdad;
        echo "<br>La edad de {$this->nombre} ha sido actualizada a {$nuevaEdad} años.";
    }

    // Método para que la persona coma
    public function comer($comida) {
        if ($comida == "ceviche") {
            echo "<br>Hmmmm, que rico gracias";
        } else {
            echo "<br>Lo siento, yo solo como ceviche";
        }
    }

    // Método para que la persona duerma
    public function dormir() {
        echo "<br>Zzzzzzzzzz";
    }
}

// Crear una instancia de Persona con el constructor
$persona1 = new Persona("Juan", 25, "Perú");

// Mostrar información de la persona1
$persona1->mostrarInformacion();

// Cambiar la edad de la persona1
$persona1->cambiarEdad(30);

// Mostrar información actualizada de la persona1
$persona1->mostrarInformacion();

// Simular que la persona1 come
$persona1->comer("Chicharron");

// Crear una clase Automovil (ejemplo adicional)
class Automovil {
    public $marca;
    public $modelo;
    public $color;

    // Constructor para inicializar los atributos del automóvil
    public function __construct($marca, $modelo, $color) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
    }

    // Método para mostrar la información del automóvil
    public function mostrarInformacion() {
        echo "<br>Este automóvil es un {$this->marca} {$this->modelo} de color {$this->color}.";
    }
}

// Crear instancia de Automovil con el constructor
$auto = new Automovil("Toyota", "Corolla", "Azul");

// Mostrar información del automóvil
$auto->mostrarInformacion();

?>
