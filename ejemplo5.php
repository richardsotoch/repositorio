<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo de Operadores</title>
    <link rel="stylesheet" href="estilo.css">
    <!-- Agrega cualquier otro enlace a estilos o scripts si es necesario -->
</head>

<body>
    <header>
        <h1>Manejo de Variables en PHP</h1>
    </header>
    <section>
        <?php
        // Definición de variables
        $trabajador = "Hector Men Lee";
        $fechaNacimiento = "29/02/1995";
        $numeroHijos = 2;
        $sueldo = 950.50;
        $activo = true;

        // Mostrar valores y tipos de datos
        echo "<h2>Valores de Variables y Tipos de Datos:</h2>";
        echo "<p>$trabajador -> " . gettype($trabajador) . "</p>";
        echo "<p>$fechaNacimiento -> " . gettype($fechaNacimiento) . "</p>";
        echo "<p>$numeroHijos -> " . gettype($numeroHijos) . "</p>";
        echo "<p>$sueldo -> " . gettype($sueldo) . "</p>";
        echo "<p>$activo -> " . gettype($activo) . "</p>";
        ?>
    </section>
    <footer>
        <p>Todos los derechos reservados @Eduardo</p>
    </footer>
</body>

</html>
