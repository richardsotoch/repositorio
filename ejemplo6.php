<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo de constantes</title>
    <link rel="stylesheet" href="estilo.css">
    <!-- Agrega cualquier otro enlace a estilos o scripts si es necesario -->
</head>

<body>
    <header>
        <h1>Manejo de Constantes en PHP</h1>
    </header>
    <section>
        <?php
        // Definición de constantes
        define("PI", 3.1416);
        define("IGV", 0.18);

        // Variables
        $radio = 15;
        $valorVenta = 250.50;

        // Cálculos usando constantes y variables
        $area = PI * $radio * $radio;
        $impuesto = $valorVenta * IGV;

        // Mostrar resultados
        echo "<h2>Resultados:</h2>";
        echo "<p>El área del círculo con radio $radio es $area</p>";
        echo "<p>El impuesto a la venta de $valorVenta es $impuesto</p>";
        ?>
    </section>
    <footer>
        <p>Todos los derechos reservados @Richard</p>
    </footer>
</body>

</html>
