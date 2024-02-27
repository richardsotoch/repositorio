<?php

// Creación de la clase Gato
class GatoSimple
{
    // Atributos
    public $color;
    public $raza;
    public $sexo;
    public $edad;
    public $peso;

    // Métodos
    public function maulla()
    {
        echo "<br>Miauuuu";
    }

    public function ronronea()
    {
        echo "<br>Mrrrrrrr";
    }

    // Un método come pero el gato solo come pescado
    public function come($comida)
    {
        if ($comida == "pescado") {
            echo "<br>Hmmmm, miau miau";
        } else {
            echo "<br>Lo siento, yo solo como pescado";
        }
    }

    // Poner a pelear a dos gatos, solo se van a pelear dos gatos machos
    public function peleaCon(GatoSimple $rival)
    {
        if ($rival->sexo == "hembra") {
            echo "<br>No peleo con gatitas";
        } else {
            echo "<br>Ven aquí que te voy a desmadrear";
        }
    }
}

// Crear instancias de GatoSimple
$silvestre = new GatoSimple;
$tom = new GatoSimple;
$alejandra = new GatoSimple;

echo "Hola gatito";
$silvestre->ronronea();
echo "<br>Toma tus croquetas";
$silvestre->come("croquetas");
echo "<br>Mejor te doy pescado";
$silvestre->come("pescado");

echo "<br>Veo otro gatito";
$tom->sexo = "macho";

$silvestre->peleaCon($tom);

$alejandra->sexo = "hembra";

$silvestre->peleaCon($alejandra); // Corregir el nombre de la variable
