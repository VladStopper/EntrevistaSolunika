function procesarNumeros(event) {
    event.preventDefault(); 

    let num1 = parseInt(document.getElementById('num1').value);
    let num2 = parseInt(document.getElementById('num2').value);
    let num3 = parseInt(document.getElementById('num3').value);
    let num4 = parseInt(document.getElementById('num4').value);

    let palindromos = [];
    if (esPalindromo(num1)) palindromos.push(num1);
    if (esPalindromo(num2)) palindromos.push(num2);
    if (esPalindromo(num3)) palindromos.push(num3);
    if (esPalindromo(num4)) palindromos.push(num4);

    document.getElementById('resultados').innerHTML = `
        <p>Los palíndromos son: ${palindromos.join(', ')}</p>
    `;
}
function esPalindromo(num) {
    let strNum = num.toString();
    return strNum === strNum.split('').reverse().join('');
}
