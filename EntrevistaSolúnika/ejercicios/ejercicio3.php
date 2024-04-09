<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body class="background-black">
    <nav class="navbar">
        <ul>
            <li class="navbar-button"><a href="../index.php">Volver al menú principal</a></li>
            <li class="navbar-button"><a href="ejercicio1.php">Ir al Ejercicio 1</a></li>
            <li class="navbar-button"><a href="ejercicio2.php">Ir al Ejercicio 2</a></li>
        </ul>
    </nav>
    <h2 class="text-white">Ingrese cinco números:</h2>
    <form action="" method="post" onsubmit="procesarNumeros(event)">
        <?php for ($i = 1; $i <= 5; $i++) { ?>
            <input type="number" id="num<?php echo $i; ?>" name="num<?php echo $i; ?>" required>
        <?php } ?>
        <button type="submit" class="calculate-button">Calcular</button>
    </form>

    <div id="resultados" class="text-white"></div>

    <script>
        function procesarNumeros(event) {
            event.preventDefault();
            let nums = [];
            for (let i = 1; i <= 5; i++) {
                let num = parseInt(document.getElementById('num' + i).value);
                nums.push(num);
            }
            let pares = 0;
            let impares = 0;
            nums.forEach(num => {
                if (num % 2 === 0) {
                    pares += num;
                } else {
                    impares += num;
                }
            });
            let promedioPares = pares / nums.length;
            let promedioImpares = impares / nums.length;
            let resultadosDiv = document.getElementById('resultados');
            let mensaje = '';
            if (promedioPares > promedioImpares) {
                mensaje = 'El promedio de los números pares es mayor.';
            } else if (promedioPares < promedioImpares) {
                mensaje = 'El promedio de los números impares es mayor.';
            } else {
                mensaje = 'Los promedios de pares e impares son iguales.';
            }
            resultadosDiv.innerHTML = '<p>' + mensaje + '</p>';
        }
    </script>
</body>
<link rel="stylesheet" href="../css/style.css">
</html>
