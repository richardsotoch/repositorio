<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa de Cambios - Caso Desarrollado 01</title>
    <link rel="stylesheet" href="estilo.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        section {
            margin-top: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <h3>CASA DE CAMBIOS</h3>
    </header>
    <section>
        <?php
            $soles = isset($_GET['txtSoles']) ? floatval($_GET['txtSoles']) : 0;
            $dolares = isset($_GET['txtDolares']) ? floatval($_GET['txtDolares']) : 0;
            $euros = isset($_GET['txtEuros']) ? floatval($_GET['txtEuros']) : 0;
        ?>
        <form action="caso1.php" method="get">
            <table>
                <tr>
                    <th>Monto en soles</th>
                    <td><input type="text" name="txtSoles" value="<?php echo $soles; ?>"></td>
                </tr>
                <tr>
                    <th>Monto en dólares</th>
                    <td><input type="text" name="txtDolares" value="<?php echo $dolares; ?>"></td>
                </tr>
                <tr>
                    <th>Monto en Euros</th>
                    <td><input type="text" name="txtEuros" value="<?php echo $euros; ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Procesar"></td>
                    <td><input type="reset" value="Limpiar"></td>
                </tr>
            </table>
        </form>

        <?php
            $dolar = $soles / 3.71;
            $euro = $soles / 4.05;
        ?>

        <table>
            <tr>
                <th>Total soles</th>
                <td><?php printf("%.2f SOLES", $soles); ?></td>
            </tr>
            <tr>
                <th>Total dólares</th>
                <td><?php printf("%.2f DOLARES", $dolar); ?></td>
            </tr>
            <tr>
                <th>Total euros</th>
                <td><?php printf("%.2f EUROS", $euro); ?></td>
            </tr>
        </table>
    </section>
    <footer>
        <h6>Todos los derechos reservados @Eduardo</h6>
    </footer>
</body>

</html>
