<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/estilo.css">
    <title>Caso 3 - Venta de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        section {
            padding: 20px;
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

        .product {
            border: 1px solid #ddd;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h3>VENTA DE PRODUCTOS</h3>
    </header>
    <section>
        <?php
            // PHP script for a dynamic greeting message based on the time of the day
            $currentHour = date('H');
            $greeting = '';

            if ($currentHour < 12) {
                $greeting = 'Buenos días';
            } elseif ($currentHour < 18) {
                $greeting = 'Buenas tardes';
            } else {
                $greeting = 'Buenas noches';
            }

            echo "<p>$greeting, bienvenido/a a nuestra tienda.</p>";

            // Array of products
            $products = [
                [
                    'name' => 'Smartphone X',
                    'description' => 'Un potente smartphone con características increíbles.',
                    'price' => 499.99
                ],
                [
                    'name' => 'Laptop ABC',
                    'description' => 'Una laptop ultradelgada con alto rendimiento.',
                    'price' => 899.99
                ],
                [
                    'name' => 'Auriculares Bluetooth',
                    'description' => 'Auriculares inalámbricos con calidad de sonido premium.',
                    'price' => 79.99
                ]
            ];

            // Display each product
            foreach ($products as $product) {
                echo "<div class='product'>
                        <h4>{$product['name']}</h4>
                        <p>{$product['description']}</p>
                        <p>Precio: {$product['price']} SOL</p>
                      </div>";
            }
        ?>
    </section>
    <footer>
        <h6>Todos los derechos reservados &copy; Richard </h6>
    </footer>
</body>
</html>
