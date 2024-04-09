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
