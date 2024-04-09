<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body class="background-black">
    <nav class="navbar">
        <ul>
            <li class="navbar-button"><a href="../index.php">Volver al menú principal</a></li>
            <li class="navbar-button"><a href="ejercicio1.php">Ir al Ejercicio 1</a></li>
            <li class="navbar-button"><a href="ejercicio3.php">Ir al Ejercicio 3</a></li>
        </ul>
    </nav>
    <h2 class="text-white">Ingrese cuatro números o letras:</h2>
    <form action="" method="post" onsubmit="procesarNumeros(event)">
        <input type="text" id="param1" name="param1" required>
        <input type="text" id="param2" name="param2" required>
        <input type="text" id="param3" name="param3" required>
        <input type="text" id="param4" name="param4" required>
        <button type="submit" class="calculate-button">Calcular</button>
    </form>

    <div id="resultados" class="text-white"></div>
    <script>
        function procesarNumeros(event) {
            event.preventDefault();
            let param1 = document.getElementById('param1').value;
            let param2 = document.getElementById('param2').value;
            let param3 = document.getElementById('param3').value;
            let param4 = document.getElementById('param4').value;
            let palindromos = [];
            if (!isNaN(param1) && esPalindromo(parseInt(param1))) palindromos.push(parseInt(param1));
            if (!isNaN(param2) && esPalindromo(parseInt(param2))) palindromos.push(parseInt(param2));
            if (!isNaN(param3) && esPalindromo(parseInt(param3))) palindromos.push(parseInt(param3));
            if (!isNaN(param4) && esPalindromo(parseInt(param4))) palindromos.push(parseInt(param4));
            palindromos.sort((a, b) => a - b);
            document.getElementById('resultados').innerHTML = '<p>Los palíndromos numéricos son: ' + palindromos.join(', ') + '</p>';
        }

        function esPalindromo(num) {
            let strNum = num.toString();
            return strNum === strNum.split('').reverse().join('');
        }
    </script>
</body>
<link rel="stylesheet" href="../css/style.css">
</html>
