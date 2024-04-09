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

    let mensaje = '';
    if (promedioPares > promedioImpares) {
        mensaje = 'El promedio de los números pares es mayor.';
    } else if (promedioPares < promedioImpares) {
        mensaje = 'El promedio de los números impares es mayor.';
    } else {
        mensaje = 'Los promedios de pares e impares son iguales.';
    }
    document.getElementById('resultados').innerHTML = `<p>${mensaje}</p>`;
}
