<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body class="background-black">
    <nav class="navbar">
        <ul>
            <li class="navbar-button"><a href="../index.php">Volver al menú principal</a></li>
            <li class="navbar-button"><a href="ejercicio2.php">Ir al Ejercicio 2</a></li>
            <li class="navbar-button"><a href="ejercicio3.php">Ir al Ejercicio 3</a></li>
        </ul>
    </nav>
    <h2 class="text-white">Ingrese tres números:</h2>
    <form action="" method="post" onsubmit="procesarNumeros(event)">
        <input type="number" id="num1" name="num1" required>
        <input type="number" id="num2" name="num2" required>
        <input type="number" id="num3" name="num3" required>
        <button type="submit" class="calculate-button">Calcular</button>
    </form>

    <div id="resultados" class="text-white"></div>
    <script>
        function procesarNumeros(event) {
            event.preventDefault();
            let num1 = parseInt(document.getElementById('num1').value);
            let num2 = parseInt(document.getElementById('num2').value);
            let num3 = parseInt(document.getElementById('num3').value);
            let max = Math.max(num1, num2, num3);
            let min = Math.min(num1, num2, num3);
            let medio = num1 + num2 + num3 - max - min;
            document.getElementById('resultados').innerHTML = `
                <p>El número más grande es: ${max}</p>
                <p>El número del medio es: ${medio}</p>
                <p>El número más pequeño es: ${min}</p>
            `;
        }
    </script>
</body>
<link rel="stylesheet" href="../css/style.css">
</html>
