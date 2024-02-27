<?php
// Estructuras condicionales
// Operadores de relación/comparación
/**
 * > mayor que
 * < menor que
 * >= mayor igual que
 * <= menor igual que
 * == igualdad => 4 == 4 / 4 == '4'
 * === idéntico => 4 === 4 / '4' === '4'
 * != diferente
 */
// Lógica Booleana
/**
 * Y lógico
 * v v => v
 * v f => f
 * f v => f
 * f f => f
 * 
 * O lógico
 * v v => v
 * v f => v
 * f v => v
 * f f => f
 * 
 * Negación
 * v => f
 * f => v
 */
$a = 15;
$b = 5;
$c = 20;

echo $a > $b && $a < $c;
echo $a > $b || $a < $c;

/* 
    if (condicion) // if simple
        acción;
    
    if (condicion) // if doble
        acciones verdadera;
    else
        acciones falsa;

    if (condicion1) // if doblemente enlazada
        acciones verdadera1
    ElseIf (condicion2)
        acciones verdadera2
    ElseIf (condicion3)
        acciones verdadera3
    Else
        acciones falsa1
    */

// Categorías: operario, administrativo, jefe
$categoria = 'jefe';

if ($categoria == 'operario') {
    echo "<br>Costo por hora: 10";
} elseif ($categoria == 'administrativo') {
    echo "<br>Costo por hora: 15";
} elseif ($categoria == 'jefe') {
    echo "<br>Costo por hora: 25";
}

/**
 * Estructura Switch
 * switch($variable a evaluar){
 * case valor1: 
 *      acción valor1;
 *      break;
 * case valor2: 
 *      acción valor2;
 *      break;
 * case valorN: 
 *      acción valorN;
 *      break;
 * default: acción_falso;
 * }
 */

$categoria = 'administrativo';

switch ($categoria) {
    case 'operario':
        echo "<br>Costo por hora: 10";
        break;
    case 'administrativo':
        echo "<br>Costo por hora: 15";
        break;
    case 'jefe':
        echo "<br>Costo por hora: 25";
        break;
    default:
        echo "<br>Costo por hora: 0";
        break;
}
?>
