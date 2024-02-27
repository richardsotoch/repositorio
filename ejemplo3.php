<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de casos</title>
    <link rel="stylesheet" href="estilo.css">
    <!-- Agrega cualquier otro enlace a estilos o scripts si es necesario -->
</head>

<body>
    <header>
        <h1>Listado de casos a desarrollar en PHP</h1>
    </header>
    <section>
        <?php
            // Utilizamos un bucle for para generar casos del 1 al 10
            for ($i = 1; $i <= 10; $i++) { 
        ?>
        <p>Caso <?php echo $i; ?></p>
        <?php
            }

            // Comentarios sobre tipos de variables
            /*
            $variable = literal
            Entero: 10, 100, 230, -123
            Reales: 20.50, 0.0052, -23.635
            Booleanos: true, false
            Caracter: 'a', "c"  
            Cadena de caracteres: 'Jefe', "Administrador" 
            */
        ?>
    </section>
    <footer>
        <p>Todos los derechos reservados - Richard</p>
    </footer>
</body>
</html>

