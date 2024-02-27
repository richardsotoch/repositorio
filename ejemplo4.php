<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de PHP</title>
</head>

<body>
    <header>
        <h1>Operadores en PHP</h1>
    </header>
    <section>
        <?php
            // Operadores aritméticos
            $b = 5;
            $c = 3;

            $suma = $b + $c;
            $resta = $b - $c;
            $multiplicacion = $b * $c;
            $division = $b / $c;
            $resto = $b % $c;

            echo "<h2>Operadores aritméticos:</h2>";
            echo "<p>Suma: $suma</p>";
            echo "<p>Resta: $resta</p>";
            echo "<p>Multiplicación: $multiplicacion</p>";
            echo "<p>División: $division</p>";
            echo "<p>Resto: $resto</p>";

            // Operador de cadena de caracteres
            $a = 15;
            $cadena = $a . " - Nota final del curso";
            echo "<h2>Operador de cadena:</h2>";
            echo "<p>$cadena</p>";
            printf("<p>La nota final del curso es %.2f</p>", $a);
        ?>
    </section>
    <footer>
        <p>Todos los derechos reservados - Richard</p>
    </footer>
</body>

</html>
