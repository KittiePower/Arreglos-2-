<!DOCTYPE html>
<html>
<head>
    <title>Actividad 20 Arreglos 2</title>
    <style>
        body {
            background-color: #f7e8e8;
            color: #FF69B4;
            font-family: Arial, sans-serif;
        }

        h1, h2 {
            color: #ff1493;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="number"] {
            padding: 5px;
            border-radius: 3px;
            border: none;
            margin-bottom: 10px;
        }

        button {
            padding: 10px 20px;
            border-radius: 3px;
            border: none;
            background-color: #ff1493;
            color: #fff;
            cursor: pointer;
        }

        p {
            margin-bottom: 10px;
        }
        </style>
    <script>
        function manipulateArray() {
            // 1) Llenar un array con 10 enteros y realizar las operaciones requeridas
            var numeros = [];
            var suma = 0;
            for (var i = 0; i < 10; i++) {
                numeros.push(parseInt(document.getElementById("num" + (i + 1)).value));
                if (i < 5) {
                    numeros[i] += 2;
                } else {
                    numeros[i] += 5;
                }
                suma += numeros[i];
            }
            
            // Mostrar los números modificados y la suma
            document.getElementById("numerosModificados").innerHTML = "Numeros Modificados: " + numeros.join(", ");
            document.getElementById("suma").innerHTML = "Suma: " + suma;

            // 2) Generar números aleatorios y calcular la función Y
            var numerosAleatorios = [];
            var resultados = [];
            for (var j = 0; j < 5; j++) {
                var numeroAleatorio = Math.floor(Math.random() * 10) + 1;
                numerosAleatorios.push(numeroAleatorio);
                var y = numeroAleatorio * numeroAleatorio - 3 * numeroAleatorio + 10;
                resultados.push(y);
            }

            // Mostrar los números aleatorios y los resultados correspondientes
            document.getElementById("numerosAleatorios").innerHTML = "Numeros Aleatorios: " + numerosAleatorios.join(", ");
            document.getElementById("resultados").innerHTML = "Resultados: " + resultados.join(", ");

            // 3) Comparar tres arrays e indicar el valor más grande y si es par o impar
            var datosCapturados = [];
            var datosAlCuadrado = [];
            var datosAleatorios = [];
            for (var k = 0; k < 5; k++) {
                datosCapturados.push(parseInt(document.getElementById("data" + (k + 1)).value));
                datosAlCuadrado.push(datosCapturados[k] * datosCapturados[k]);
                datosAleatorios.push(Math.floor(Math.random() * 100) + 1);
            }

            // Encontrar el valor más grande entre los arrays
            var valorMasGrande = Math.max(Math.max.apply(null, datosCapturados), Math.max.apply(null, datosAlCuadrado), Math.max.apply(null, datosAleatorios));
            var arrayMasGrande;
            if (valorMasGrande === Math.max.apply(null, datosCapturados)) {
                arrayMasGrande = "Datos Capturados";
            } else if (valorMasGrande === Math.max.apply(null, datosAlCuadrado)) {
                arrayMasGrande = "Datos al Cuadrado";
            } else {
                arrayMasGrande = "Datos Aleatorios";
            }

            // Verificar si el valor más grande es par o impar
            var esPar = valorMasGrande % 2 === 0 ? "par" : "impar";

            // Mostrar los resultados de la comparación
            document.getElementById("arrayMasGrande").innerHTML = "Array Mas Grande: " + arrayMasGrande;
            document.getElementById("valorMasGrande").innerHTML = "Valor Mas Grande: " + valorMasGrande;
            document.getElementById("esPar").innerHTML = "Es Par/Imp
// Mostrar los resultados de la comparación
            document.getElementById("arrayMasGrande").innerHTML = "Array Mas Grande: " + arrayMasGrande;
            document.getElementById("valorMasGrande").innerHTML = "Valor Mas Grande: " + valorMasGrande;
            document.getElementById("esPar").innerHTML = "Es Par/Impar: " + esPar;
        }
    </script>
</head>
<body>
    <h1>Manipulación de Arrays</h1>
    <h2>Tarea 1</h2>
    <form>
        <p>Ingrese 10 enteros:</p>
        <input type="number" id="num1"><br>
        <input type="number" id="num2"><br>
        <input type="number" id="num3"><br>
        <input type="number" id="num4"><br>
        <input type="number" id="num5"><br>
        <input type="number" id="num6"><br>
        <input type="number" id="num7"><br>
        <input type="number" id="num8"><br>
        <input type="number" id="num9"><br>
        <input type="number" id="num10"><br>
        <button type="button" onclick="manipulateArray()">Realizar Manipulacion</button>
    </form>

    <p id="numerosModificados"></p>
    <p id="suma"></p>

    <h2>Tarea 2</h2>
    <p id="numerosAleatorios"></p>
    <p id="resultados"></p>

    <h2>Tarea 3</h2>
    <form>
        <p>Ingrese 5 enteros:</p>
        <input type="number" id="data1"><br>
        <input type="number" id="data2"><br>
        <input type="number" id="data3"><br>
        <input type="number" id="data4"><br>
        <input type="number" id="data5"><br>
        <button type="button" onclick="manipulateArray()">Comparar Arrays</button>
    </form>

    <p id="arrayMasGrande"></p>
    <p id="valorMasGrande"></p>
    <p id="esPar"></p>
</body>
</html>
